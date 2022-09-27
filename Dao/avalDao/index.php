<?php 

// Criação da classe Produto com o CRUD

class AvalDao {

    public function criar(Aval $aval) {
        try {

            $sql = "INSERT INTO avaliacao (item_id, usuario_id, data_aval, nome, mensagem, nota) VALUES (:item_id, :user_id, :data_aval, :nome, :mensagem, :nota)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $aval->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":user_id", $aval->getUserid(), PDO::PARAM_STR);
            $stmt->bindValue(":item_id", $aval->getItemid(), PDO::PARAM_STR);
            $stmt->bindValue(":data", $aval->getData(), PDO::PARAM_STR);
            $stmt->bindValue(":msg", $aval->getMsg(), PDO::PARAM_STR);
            $stmt->bindValue(":nota", $aval->getNota(), PDO::PARAM_STR);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Inserir Avaliação <br>" . $e->getMessage() . '<br>';
        }
    }

    public function alterar(Aval $aval) {
        try {
            $sql = "UPDATE avaliacao SET item_id = :item_id, usuario_id = :user_id, data_aval = :data, mensagem = :msg, nota = :nota WHERE id_avaliacao = :id";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $aval->getID(), PDO::PARAM_INT);
            $stmt->bindValue(":nome", $aval->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":user_id", $aval->getUserid(), PDO::PARAM_STR);
            $stmt->bindValue(":item_id", $aval->getItemid(), PDO::PARAM_STR);
            $stmt->bindValue(":data", $aval->getData(), PDO::PARAM_STR);
            $stmt->bindValue(":msg", $aval->getMsg(), PDO::PARAM_STR);
            $stmt->bindValue(":nota", $aval->getNota(), PDO::PARAM_STR);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar atualizar o Item." . $e->getMessage();
        }
    }

    public function listar() {
        try {
            $sql = "SELECT * FROM avaliacao order by nome asc";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaAval($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }

    public function editar() {
        try {
            $sql = "SELECT * FROM avaliacao WHERE id_avaliacao = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $_POST['id_edit'], PDO::PARAM_INT);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaAval($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar buscar Usuário." . $e->getMessage();
        }

    }

    private function listaAval($linhas) {

        $aval = new Aval();
        $aval->setID($linhas['id_aval']);
        $aval->setNome($linhas['nome']);
        $aval->setUserid($linhas['user_id']);
        $aval->setItemid($linhas['item_id']);
        $aval->setData($linhas['data']);
        $aval->setMsg($linhas['mensagem']);
        $aval->setNota($linhas['nota']);

        return $aval;
    }

    public function excluir(Aval $aval) {
        try {

            $sql = "DELETE FROM avaliacao WHERE id_avaliacao = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $aval->getID(), PDO::PARAM_INT);
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Excluir produto" . $e->getMessage();
        }
    }

}

?>