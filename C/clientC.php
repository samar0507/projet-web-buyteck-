<?php
	include_once '../config.php';
	include_once '../M/client.php';
	class clientC {
		function afficherlisteclient()
    {
        $sql="SELECT * FROM client WHERE id=:id";
        $db=config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
           }
        catch(Exception $e)
        {
            die('Erreur:'.$e->getMessage());
        }
    }
		function afficherclients(){
			$sql="SELECT * FROM client";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
  
		function supprimerclient($username){
			$sql="DELETE FROM client WHERE username=:username";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':username', $username);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function ajouterclient($client){
			$sql="INSERT INTO client (username,passwordd, nom, prenom, email, noo/*,dateb*/) 
			VALUES (:username,:passwordd, :nom, :prenom, :email, :noo  /*:dateb*/)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
                    'username' => $client->getusername(),
                    'passwordd' => $client->getpasswordd(),
                    'nom' => $client->getnom(),
					'prenom' => $client->getprenom(),
					'email' => $client->getemail(),
                    'noo' => $client->getnoo(),
					/*'dateb' => $client->getdateb()*/
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererclient($username){
			$sql='SELECT * from client where username="'.$username.'"	';
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$client=$query->fetch();
				return $client;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererclientid($id){
			$sql="SELECT * from client where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
		
				$client=$query->fetch();
				return $client;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererclientemail($email){
			$sql='SELECT * from client where email="'.$email.'"	';
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$client=$query->fetch();
				return $client;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierclient($client, $username){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE client SET 
						username= :username, 
						passwordd= :passwordd, 
						nom= :nom, 
						prenom= :prenom, 
						email= :email, 
						noo= :noo
						-- dateb= :dateb
					WHERE username= :username'
				);
				$query->execute([
					'username' => $client->getusername(),
					'passwordd' => $client->getpasswordd(),
					'nom' => $client->getnom(),
					'prenom' => $client->getprenom(),
					'email' => $client->getemail(),
					'noo' => $client->getnoo()
					// 'dateb' => $client->getdateb(),
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function bloquerclient($client, $username){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE client SET 
						bloqu??= 1
						-- dateb= :dateb
					WHERE username= :username'
				);
				$query->execute([
					'username' => $username

					// 'dateb' => $client->getdateb(),
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function debloquerclient($client, $username){
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE client SET 
                        bloqu??= 0
                        -- dateb= :dateb
                    WHERE username= :username'
                );
                $query->execute([
                    'username' => $username
                    // 'dateb' => $client->getdateb(),
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
		function activecompte($client, $username){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE client SET 
						verification= 1
						-- dateb= :dateb
					WHERE username= :username'
				);
				$query->execute([
					'username' => $username

					// 'dateb' => $client->getdateb(),
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function modifpassword($client, $email){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE client SET 
						passwordd= :newpassword,
						-- dateb= :dateb
					WHERE email= :email',
				);
				$query->execute([
					'newpassword' => $client['passwordd'],
					'email' => $email

					// 'dateb' => $client->getdateb(),
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>