<?php
session_start(); //��������� ������ 

class Auto {
    private $_login = "hi"; //������������� �����
    private $_password = "123"; //������������� ������

    public function isAuto() {
        if (isset($_SESSION["is_auto"])) { //���� ������ ����������
            return $_SESSION["is_auto"]; //���������� �������� ���������� ������ is_auth (������ true ���� �����������, false ���� �� �����������)
        }
        else return false; 
    }

    public function auto($login =null, $passwors=null) {
        if ($login == $this->_login && $passwors == $this->_password) { //���� ����� � ������ ������� ���������
            $_SESSION["is_auto"] = true; //������ ������������ ��������������
            $_SESSION["login"] = $login;
			$_SESSION["passwrd"] = $passwors;
			//���������� � ������ ����� ������������
            return true;
        }
        else { //����� � ������ �� �������
            $_SESSION["is_auto"] = false;
            return false; 
        }
    }
    /**
     * ����� ���������� ����� ��������������� ������������ 
     */
    public function getLogin() {
        if ($this->isAuto()) { //���� ������������ �����������
            return $_SESSION["login"]; //���������� �����, ������� ������� � ������
        }
    }
    
    public function out() {
        unset($_SESSION['login']);
		 unset($_SESSION['passwrd']);
//������� ������
        session_destroy(); //����������
    }
}
$auto = new Auto();

if (isset($_POST["login"]) && isset($_POST["passwd"])) { //���� ����� � ������ ���� ����������
    if (!$auto->auto((string)$_POST["login"], (string)$_POST["passwd"])) { //���� ����� � ������ ������ �� ���������
        echo "<h2 style=\"color:red;\"></h2>";
    }
}

if (isset($_GET["exit"])) { //���� ������ ������ ������
        $auto->out(); //�������
	}

if ($auto->isAuto()) { // ���� ������������ �����������, ������������:  
	require_once("index.php"); // ������ � ������� ���� ��� ����� ����������� ����� � ������� � ������� 
} 

?>