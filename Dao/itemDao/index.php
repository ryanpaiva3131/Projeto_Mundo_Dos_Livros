<?php 

// Criação da classe Produto com o CRUD

class ItemDao {

    public function criar(Item $item) {
        try {

            $sql = "INSERT INTO item (nome, loja, link, imagem, status, cont_aval, categoria, desc, autor, media) VALUES (:nome, :loja, :link, :img, :status, :cont_aval, :categoria, :desc, :autor, :media)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $item->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":loja", $item->getLoja(), PDO::PARAM_STR);
            $stmt->bindValue(":link", $item->getLink(), PDO::PARAM_STR);
            $stmt->bindValue(":status", $item->getStatus(), PDO::PARAM_STR);
            $stmt->bindValue(":categoria", $item->getCategoria(), PDO::PARAM_STR);
            $stmt->bindValue(":desc", $item->getDesc(), PDO::PARAM_STR);
            $stmt->bindValue(":autor", $item->getAutor(), PDO::PARAM_STR);

            $nomep = $produto->getNome();
            $imagem = $produto->getImg();
            include '../includes/upload_img.php';
            $stmt->bindValue(":img", $nome_imagem, PDO::PARAM_STR);
            
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Inserir Item <br>" . $e->getMessage() . '<br>';
        }
    }

    public function alterar(Item $item) {
        try {
            $sql = "UPDATE item SET nome = :nome, loja = :loja, link = :link, imagem = :img, status = :status, cont_aval = :cont_aval, categoria = :categoria, desc = :desc, autor = :autor, media = :media WHERE id_item = :id";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $item->getID(), PDO::PARAM_INT);
            $stmt->bindValue(":nome", $item->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":loja", $item->getLoja(), PDO::PARAM_STR);
            $stmt->bindValue(":link", $item->getLink(), PDO::PARAM_STR);
            $stmt->bindValue(":status", $item->getStatus(), PDO::PARAM_STR);
            $stmt->bindValue(":categoria", $item->getCategoria(), PDO::PARAM_STR);
            $stmt->bindValue(":desc", $item->getDesc(), PDO::PARAM_STR);
            $stmt->bindValue(":autor", $item->getAutor(), PDO::PARAM_STR);

            $nomep = $produto->getNome();
            $imagem = $produto->getImg();
            include '../includes/upload_img.php';
            $stmt->bindValue(":img", $nome_imagem, PDO::PARAM_STR);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar atualizar o Item." . $e->getMessage();
        }
    }

    public function listar() {
        try {
            $sql = "SELECT * FROM item order by nome asc";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaItem($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }

    public function editar() {
        try {
            $sql = "SELECT * FROM item WHERE id_item = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $_POST['id_edit'], PDO::PARAM_INT);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaItem($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar buscar Usuário." . $e->getMessage();
        }

    }

    private function listaItem($linhas) {

        $item = new Item();
        $item->setID($linhas['id_item']);
        $item->setNome($linhas['nome']);
        $item->setLoja($linhas['loja']);
        $item->setLink($linhas['link']);
        $item->setImg($linhas['imagem']);
        $item->setDesc($linhas['desc']);
        $item->setCategoria($linhas['categoria']);
        $item->setAutor($linhas['autor']);

        return $item;
    }

    public function excluir(Item $item) {
        try {

            $sql = "DELETE FROM item WHERE id_item = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $item->getID(), PDO::PARAM_INT);
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Excluir produto" . $e->getMessage();
        }
    }

}

?>