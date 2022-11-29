<?php
  function getConnection() {
    try {
        $conexao = new PDO('mysql:host=localhost;dbname=webII;port=3306', "root", "");
        return $conexao;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
  }

  function getMedicos() {
    $conexao = getConnection();
    $sql = "SELECT medico.*, especialidade.descricao AS especialidade_descricao FROM medico JOIN especialidade ON especialidade.id = medico.especialidade_id ORDER BY nome";
    $sentenca = $conexao->query($sql, PDO::FETCH_ASSOC);
    $dados = $sentenca->fetchAll();
    $conexao = null;
    return $dados;
  }

  function getEspecialidades() {
    $conexao = getConnection();
    $sql = "SELECT * FROM especialidade ORDER BY descricao";
    $sentenca = $conexao->query($sql, PDO::FETCH_ASSOC);
    $dados = $sentenca->fetchAll();
    $conexao = null;
    return $dados;
  }

  function salvarMedico($medico) {
    $conexao = getConnection();
    $sql = "INSERT INTO medico (nome, email, especialidade_id, data_aniversario, foto) VALUES (?,?,?,?,?)";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $medico['nome']);
    $sentenca->bindParam(2, $medico['email']);
    $sentenca->bindParam(3, $medico['especialidade_id']);
    $sentenca->bindParam(4, $medico['data_aniversario']);
    $sentenca->bindParam(5, $medico['foto']);
    $sentenca->execute();
    $conexao = null;
  }

  function salvarEspecialidade($especialidade) {
    $conexao = getConnection();
    $sql = "INSERT INTO especialidade (descricao) VALUES (?)";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $especialidade['descricao']);
    $sentenca->execute();
    $conexao = null;
  }

  function excluirMedico($id) {
    $conexao = getConnection();
    $sql = "DELETE FROM medico WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $conexao = null;
  }

  function excluirEspecialidade($id) {
    $conexao = getConnection();
    $sql = "DELETE FROM especialidade WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $conexao = null;
  }

  function getMedico($id) {
    $conexao = getConnection();
    $sql = "SELECT * FROM medico WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $medico = $sentenca->fetch(PDO::FETCH_ASSOC);
    $conexao = null;
    return $medico;
  }

  function getEspecialidade($id) {
    $conexao = getConnection();
    $sql = "SELECT * FROM especialidade WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $especialidade = $sentenca->fetch(PDO::FETCH_ASSOC);
    $conexao = null;
    return $especialidade;
  }

  function alterarMedico($medico) {
    $conexao = getConnection();
    $sql = "UPDATE medico SET nome=?, email=?, especialidade_id=?, data_aniversario=?, foto=? WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $medico['nome']);
    $sentenca->bindParam(2, $medico['email']);
    $sentenca->bindParam(3, $medico['especialidade_id']);
    $sentenca->bindParam(4, $medico['data_aniversario']);
    $sentenca->bindParam(5, $medico['foto']);
    $sentenca->bindParam(6, $medico['id']);
    $sentenca->execute();
    $conexao = null;
  }

  function alterarEspecialidade($especialidade) {
    $conexao = getConnection();
    $sql = "UPDATE especialidade SET descricao=? WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $especialidade['descricao']);
    $sentenca->bindParam(2, $especialidade['id']);
    $sentenca->execute();
    $conexao = null;
  }

  function getUserByEmail($email) {
    $conexao = getConnection();
    $sql = "SELECT * FROM usuario WHERE email=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $email);
    $sentenca->execute();
    $usuario = $sentenca->fetch(PDO::FETCH_ASSOC);
    $conexao = null;
    return $usuario;
  }

 ?>
