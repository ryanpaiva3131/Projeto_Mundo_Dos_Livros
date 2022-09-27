<?php

class Userdao{
    
    public function criar(Usuario $usuario) {
        try {

            $sql = "INSERT INTO usuario (nome, senha, cpf, email, telefone) VALUES (:nome, :senha, :cpf, :email, :telefone)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $usuario->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":cpf", $usuario->getCPF(), PDO::PARAM_STR);
            $stmt->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(":telefone", $usuario->getTelefone(), PDO::PARAM_STR);
            $stmt->bindValue(":senha", $usuario->getSenha(), PDO::PARAM_STR);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Inserir usuario <br>" . $e->getMessage() . '<br>';
        }
    }

    public function alterar(Usuario $usuario) {
        try {
            $sql = "UPDATE usuario SET nome = :nome, senha = :senha, cpf = :cpf, email = :email WHERE id_usuario = :id";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $usuario->getID(), PDO::PARAM_INT);
            $stmt->bindValue(":nome", $usuario->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":cpf", $usuario->getCPF(), PDO::PARAM_STR);
            $stmt->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(":telefone", $usuario->getTelefone(), PDO::PARAM_STR);
            $stmt->bindValue(":senha", $usuario->getSenha(), PDO::PARAM_STR);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar atualizar usuario." . $e->getMessage();
        }

    }

    public function listar() {
        try {
            $sql = "SELECT * FROM usuario order by nome asc";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listausuarios($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }

    public function editar() {
        
        try {
            $sql = "SELECT * FROM usuario WHERE id_usuario = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $_POST['id_edit'], PDO::PARAM_INT);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listausuarios($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar buscar Usuário." . $e->getMessage();
        }

    }

    private function listausuarios($linhas) {

        $usuario = new usuario();
        $usuario->setID($linhas['id_usuario']);
        $usuario->setNome($linhas['nome']);
        $usuario->setCPF($linhas['cpf']);
        $usuario->setTelefone($linhas['telefone']);
        $usuario->setEmail($linhas['email']);
        $usuario->setImg($linhas['imagem']);
        $usuario->setPerm($linhas['permissao']);
        $usuario->setSenha($linhas['senha']);

        return $usuario;
    }

    public function excluir(usuario $usuario) {
        try {

            $sql = "DELETE FROM usuario WHERE id_usuario= :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $usuario->getID(), PDO::PARAM_INT);
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Excluir usuario" . $e->getMessage();
        }
    }

    public function login(Usuario $usuario) {
		try {
			$sql = "SELECT * FROM usuario WHERE email = :email";
			$stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
            $stmt->execute();
			$user_linha = $stmt->fetch(PDO::FETCH_ASSOC);
					
			if($stmt->rowCount() == 1) {

				if(password_verify($usuario->getSenha(), $user_linha['senha'])){

					$_SESSION['user_session'] = $user_linha['id_usuario'];
                    session_start();
					return true;

				} else {
					return false;
				}
			}
		}
		catch(PDOException $e) {

			echo "Erro ao tentar realizar o login do usuario" . $e->getMessage();
		
        }
	}

    public function checkLogin() {
		if(isset($_SESSION['user_session'])) {
			return true;
		}else {
            return false;
        }
	}

    public function logout() {
        session_start();
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}

}

?>