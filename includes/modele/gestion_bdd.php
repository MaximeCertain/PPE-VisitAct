<?php
/**
 * Vérifie les identifiants de connexion et instancie les variables de session
 
 * @param $loginSaisi 
 * @param $mdpSaisi
 * @return un booléen true si utilisateur connu, false sinon 
*/
function verifierIdentification($loginSaisi,$mdpSaisi) 
{
    require "connect_bdd.php";
    $sql="select * from g2_collaborateur" ;
    $exec=$db->query($sql);
    $trouve = false ;
    $fin=false ;
    while (!$trouve && !$fin)
    {
        if ($ligne = $exec->fetch())
        {
            if ($ligne['cll_matricule']==$loginSaisi && $ligne['cll_motdepasse']==$mdpSaisi)
            {
                $trouve = true ;
				$_SESSION['cll_matricule']=$ligne['cll_matricule'] ;
                $_SESSION['cll_nom']=$ligne['cll_nom'] ;
            }
        }
        else
        {
            $fin = true ;
        }
    }
	return $trouve ;
}

/**
 * recherche la liste des praticiens dans l'ordre alphabétique
 
 * @param 
 * @return un curseur avec le nom, le prénom et le n° des praticiens
*/
function getLesPraticiens()
{
	require"connect_bdd.php";
	$sql="select *
		  from g2_praticien
          order by pra_nom";
    //exécution de la requete
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    //on retourne un curseur contenant l'ensemble des lignes de la table 
    $curseur=$exec->fetchAll();
    return $curseur;      
}

/**
 * recherche la liste des motifs des comptes rendus
 
 * @param 
 * @return un curseur avec le code et le libellé des motifs
*/
function getLesMotifs()
{
    require"connect_bdd.php";
    $sql="select *
          from g2_motif_visite
		  order by mot_libelle";
    //exécution de la requete
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    //on retourne un curseur contenant l'ensemble des lignes de la table 
    $curseur=$exec->fetchAll();
    return $curseur;      
}

/**
 * recherche la liste des médicaments dans l'ordre alphabétique
 
 * @param 
 * @return un curseur avec le dépot légal et le nom commercial des médicaments
*/
function getLesMedicaments()
{
    require"connect_bdd.php";
    $sql="select *
          from g2_medicament
          order by med_nomcommercial";
    //exécution de la requete
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;      
}

/**
 * recherche du profil d'un collaborateur pour sa dernière fonction occupée
 
 * @param $matricule
 * @return un entier associé au profil de l'utilisateur
 * 1 pour un visiteur - 2 pour un délégué - 3 pour un responsable
*/
function getProfil($matricule)
{
    require"connect_bdd.php";
	//recherche de la dernière affectation de l'utilisateur authentifié
    $sql="SELECT tra_role
          FROM g2_travailler
          WHERE tra_cll_matricule = '$matricule' 
		  ORDER BY tra_date DESC LIMIT 0,1" ;
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetch();
	$profil = 0 ;
	if ($result['tra_role']=="Visiteur") $profil = 1 ;
	if ($result['tra_role']=="Délégué") $profil = 2 ;
	if ($result['tra_role']=="Responsable") $profil = 3 ;

    return $profil;
}

/**
 * recherche la liste des types des praticiens 
 
 * @param 
 * @return un curseur avec l'ensemble des colonnes de la table des praticiens
*/
function getLesTypesPraticiens()
{
    require"connect_bdd.php";
    $sql="SELECT *
          FROM g2_type_praticien";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetchAll();

    return $result;    
}

/**
 * recherche la liste des praticiens d'un type
 
 * @param $type
 * @return un curseur avec l'ensemble des colonnes de la table des praticiens
*/
function getLesPraticiensDuType($type)
{
    require"connect_bdd.php";
    $sql="SELECT *
          FROM g2_praticien
          INNER JOIN g2_type_praticien on typ_code = pra_typ_code
          WHERE pra_typ_code = '$type'
          order by pra_nom asc";
          
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetchAll();

    return $result;
}

/**
 * recherche la liste des praticiens de tous les types
 
 * @param $type
 * @return un curseur avec l'ensemble des colonnes de la table des praticiens
*/
function getLesPraticiensTousType()
{
    require"connect_bdd.php";
    $sql="SELECT *
          FROM g2_praticien
          INNER JOIN g2_type_praticien on typ_code = pra_typ_code
          order by pra_nom asc";
          
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetchAll();

    return $result;
}
function getLesCollaborateurs()
{
    require"connect_bdd.php";
    $sql="select *
          from g2_collaborateur
          order by cll_nom";
    //exécution de la requete
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    //on retourne un curseur contenant l'ensemble des lignes de la table 
    $curseur=$exec->fetchAll();
    return $curseur;      
}

/* ------------------------------- RESPONSABLE -------------------------------------------*/

// AJOUTER VISITEUR (ajouter visiteur) 
function getAjouterVisiteur($matricule, $nom, $prenom, $date)
{
    require "connect_bdd.php";
    if(empty($matricule) AND empty($nom) AND empty($prenom) AND empty($date) AND !isset($matricule) AND !isset($nom) AND !isset($prenom) AND !isset($date))
    {
            echo"<script>alert('Veuillez remplir tous les champs');</script>";
    }
    else
    {
        $sql = "INSERT INTO g2_collaborateur (cll_matricule, cll_nom, cll_prenom, cll_dateembauche, cll_motdepasse) 
                VALUES ('$matricule','$nom','$prenom','$date','pass')";
        $exec = $db->prepare($sql);
        $exec->execute();
        return $exec;
    }
}
// AJOUTER VISITEUR TB TRAVAILLER (ajouter visiteur) 
function getAjoutVisiteurTravailler($matricule, $date, $region)
{
    require "connect_bdd.php";
    $sql = "INSERT INTO g2_travailler (tra_cll_matricule, tra_date, tra_reg_code, tra_role, tra_role_actuel) 
                VALUES ('$matricule','$date','$region','Visiteur', 1)";
        $exec = $db->prepare($sql);
        $exec->execute();
        echo"<script>alert('Bien enregistré !');</script>";
        return $exec;
}

// COMBOBOX CHOISIR REGION VISITEUR (ajouter visiteur / muter / noter) 
function getCodeRegion()
{
    require"connect_bdd.php";

    $code_secteur = getCodeSecteur($_SESSION['cll_matricule']);

    $sql="SELECT * FROM g2_region INNER JOIN g2_secteur ON reg_sec_code = sec_code WHERE sec_code = '$code_secteur';";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetchAll();

    return $result;    
}


// NOTER VISITEUR 
function SetAjoutNoteVisiteur($matricule, $note, $bilan)
{
    require "connect_bdd.php";
    $sql = "INSERT INTO g2_noter (hist_annee, hist_cll_matricule, hist_note, hist_bilan) 
                VALUES (NOW(),'$matricule','$note','$bilan')";
        $exec = $db->prepare($sql);
        $exec->execute();
        echo"<script>alert('Bien enregistré !');</script>";
        return $exec;
}

// AJOUTER UN BUDGET 
function SetAjoutBudget($region, $annee, $budget)
{
    require "connect_bdd.php";
    $sql = "INSERT INTO g2_disposer (disp_reg_code, disp_annee, disp_budget_annuel) 
                VALUES ('$region','$annee','$budget')";
        $exec = $db->prepare($sql);
        $exec->execute();
        echo"<script>alert('Bien enregistré !');</script>";
        return $exec;
}
// AFFICHER BUDGETS 
function getLesBudgets()
{
    require"connect_bdd.php";
    $sql="select *
          from g2_disposer
          inner join g2_region on reg_code = disp_reg_code
          order by reg_nom";
    //exécution de la requete
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;      
}

// AFFICHER LES VISITEURS A MUTER & VISTEURS A NOTER DANS LA COMBO (muter / noter)
function getCodeCollaborateur()
{
    $code_secteur = getCodeSecteur($_SESSION['cll_matricule']);

    require"connect_bdd.php";
    $sql="SELECT * FROM g2_collaborateur INNER JOIN g2_travailler ON tra_cll_matricule = cll_matricule INNER JOIN g2_region ON tra_reg_code = reg_code INNER JOIN g2_secteur ON reg_sec_code = sec_code WHERE tra_role = 'Visiteur' AND tra_role_actuel = 1 AND sec_code = '$code_secteur' ORDER BY cll_nom ASC";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetchAll();

    return $result;    
}

// AFFICHER VISITEUR A MUTER PAGE MODIFIER (muter)
function getLeVisiteur($numCll)
{
	require"connect_bdd.php";
	$sql="SELECT * 
		  FROM g2_collaborateur
		  INNER JOIN g2_travailler ON tra_cll_matricule = cll_matricule
		  INNER JOIN g2_region ON reg_code = tra_reg_code
		  WHERE cll_matricule = '$numCll'
		  AND tra_role = 'Visiteur'
		  AND tra_role_actuel = 1;";
	// exécution de la requête
	$exec=$db->prepare($sql);
	$exec->execute();
	// on retourne un curseur contenant l'ensemble des lignes de la table
	$curseur=$exec->fetchAll();
	return $curseur; 
		  
}

// MUTER VISITEUR (muter)
function setMuterVisiteur($region,$numCll)
{
	require"connect_bdd.php";
	$modification = "UPDATE g2_travailler
					 SET tra_reg_code = '$region'
					 WHERE tra_cll_matricule = '$numCll';";
				$execModif = $db -> prepare($modification);
				$execModif -> execute();
				echo"<script>alert('Mutation effectuée');</script>";
				return $execModif;
}

// ROLES DES VISITEURS TABLEAU 
function getLesRoles()
{
    require"connect_bdd.php";
    $sql="SELECT DISTINCT(tra_role)
          FROM g2_travailler 
          ORDER BY tra-role";
    // exécution de la requête
    $exec=$db->prepare($sql);
    $exec->execute();
    // on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;
} 

// PROMOUVOIR OBTENIR SECTEUR DE L'UTILISATEUR 
function getCodeSecteur($matricule)
{
    require"connect_bdd.php";
    $sql="SELECT * FROM g2_secteur INNER JOIN g2_region ON reg_sec_code = sec_code INNER JOIN g2_travailler ON tra_reg_code = reg_code WHERE tra_role_actuel = 1 AND tra_cll_matricule = '$matricule';";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetch();

    return $result['sec_code'];    
}


// PROMOUVOIR VISITEUR 
function getAffichePromotionVisiteur()
{

    $code_secteur = getCodeSecteur($_SESSION['cll_matricule']);

    require"connect_bdd.php";
    $sql="SELECT * FROM g2_collaborateur INNER JOIN g2_travailler ON tra_cll_matricule = cll_matricule INNER JOIN g2_region ON tra_reg_code = reg_code INNER JOIN g2_secteur ON reg_sec_code = sec_code WHERE tra_role = 'Visiteur' AND tra_role_actuel = 1 AND sec_code = '$code_secteur' ORDER BY cll_nom ASC";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetchAll();

    return $result;    
} 

function setPromouvoirVisiteur($id,$region)
{
    require"connect_bdd.php";
    $sql="UPDATE g2_travailler SET tra_role_actuel = NULL WHERE tra_cll_matricule = '$id' AND tra_role = 'Visiteur'";
    $exec = $db->prepare($sql);
    $exec->execute();


    $sql="INSERT INTO g2_travailler (tra_cll_matricule, tra_date, tra_reg_code, tra_role, tra_role_actuel) VALUES ('$id', NOW(), '$region', 'Délégué',1)";
    $exec = $db->prepare($sql);
    $exec->execute();

    echo"<script>alert('Bien modifié !');</script>";
    
}

// PROMOUVOIR DELEGUE 
function getAffichePromotionDelegue()
{
    $code_secteur = getCodeSecteur($_SESSION['cll_matricule']);

    require"connect_bdd.php";
    $sql="SELECT * FROM g2_collaborateur INNER JOIN g2_travailler ON tra_cll_matricule = cll_matricule INNER JOIN g2_region ON tra_reg_code = reg_code INNER JOIN g2_secteur ON reg_sec_code = sec_code WHERE tra_role = 'Délégué' AND tra_role_actuel = 1 AND sec_code = '$code_secteur' ORDER BY cll_nom ASC";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetchAll();

    return $result;    
} 

function setPromouvoirDelegue($id,$region)
{
    require"connect_bdd.php";
    $sql="UPDATE g2_travailler SET tra_role_actuel = NULL WHERE tra_cll_matricule = '$id' AND tra_role = 'Délégué'";
    $exec = $db->prepare($sql);
    $exec->execute();


    $sql="INSERT INTO g2_travailler (tra_cll_matricule, tra_date, tra_reg_code, tra_role, tra_role_actuel) VALUES ('$id', NOW(), '$region', 'Responsable',1)";
    $exec = $db->prepare($sql);
    $exec->execute();

    echo"<script>alert('Bien modifié !');</script>";
    
}

// AFFICHER LES STATS 
function getVisiteNord()
{
    require"connect_bdd.php";
    $sql="SELECT COUNT(DISTINCT(rap_num)) as nb FROM g2_secteur INNER JOIN g2_region ON reg_sec_code = sec_code INNER JOIN g2_travailler ON tra_reg_code = reg_code INNER JOIN g2_collaborateur ON tra_cll_matricule = cll_matricule INNER JOIN g2_rapport_visite ON rap_cll_matricule = cll_matricule WHERE sec_code =  'N'";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetch();

    return $result['nb'];    
}

function getVisiteEst()
{
    require"connect_bdd.php";
    $sql="SELECT COUNT(DISTINCT(rap_num)) as nb FROM g2_secteur INNER JOIN g2_region ON reg_sec_code = sec_code INNER JOIN g2_travailler ON tra_reg_code = reg_code INNER JOIN g2_collaborateur ON tra_cll_matricule = cll_matricule INNER JOIN g2_rapport_visite ON rap_cll_matricule = cll_matricule WHERE sec_code =  'E'";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetch();

    return $result['nb'];    
}

function getVisiteParis()
{
    require"connect_bdd.php";
    $sql="SELECT COUNT(DISTINCT(rap_num)) as nb FROM g2_secteur INNER JOIN g2_region ON reg_sec_code = sec_code INNER JOIN g2_travailler ON tra_reg_code = reg_code INNER JOIN g2_collaborateur ON tra_cll_matricule = cll_matricule INNER JOIN g2_rapport_visite ON rap_cll_matricule = cll_matricule WHERE sec_code =  'P'";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetch();

    return $result['nb'];    
}

function getVisiteOuest()
{
    require"connect_bdd.php";
    $sql="SELECT COUNT(DISTINCT(rap_num)) as nb FROM g2_secteur INNER JOIN g2_region ON reg_sec_code = sec_code INNER JOIN g2_travailler ON tra_reg_code = reg_code INNER JOIN g2_collaborateur ON tra_cll_matricule = cll_matricule INNER JOIN g2_rapport_visite ON rap_cll_matricule = cll_matricule WHERE sec_code =  'O'";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetch();

    return $result['nb'];    
}

function getVisiteSud()
{
    require"connect_bdd.php";
    $sql="SELECT COUNT(DISTINCT(rap_num)) as nb FROM g2_secteur INNER JOIN g2_region ON reg_sec_code = sec_code INNER JOIN g2_travailler ON tra_reg_code = reg_code INNER JOIN g2_collaborateur ON tra_cll_matricule = cll_matricule INNER JOIN g2_rapport_visite ON rap_cll_matricule = cll_matricule WHERE sec_code =  'S'";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetch();

    return $result['nb'];    
}

// VALIDER ACTIVITE COMPLEMENTAIRE 
function getAfficherAC()
{

    $code_secteur = getCodeSecteur($_SESSION['cll_matricule']);

    require"connect_bdd.php";
    $sql="SELECT DISTINCT(ac_num), ac_date, ac_lieu, ac_theme, ac_budgetEstime, ac_validation FROM g2_activite_compl INNER JOIN g2_collaborateur ON ac_cll_matricule = cll_matricule INNER JOIN g2_travailler ON tra_cll_matricule = cll_matricule INNER JOIN g2_region ON tra_reg_code = reg_code INNER JOIN g2_secteur ON reg_sec_code = sec_code WHERE sec_code = '$code_secteur' AND ac_validation = 0";
    //exécution de la requete
    $exec = $db->query($sql);
    $result = $exec->fetchAll();

    return $result;    
}

function setValiderAC($id)
{
    require"connect_bdd.php";
    $sql="UPDATE g2_activite_compl SET ac_validation = 1 WHERE ac_num = '$id'";
    $exec = $db->prepare($sql);
    $exec->execute();

    echo"<script>alert('Activité complémentaire validée !');</script>";
    
}
/*------------------------------PIERRE-BRICE VISITEUR-------------------------------------*/
// Ajoute un compte-rendu
function getAjouterRapport($matricule,$numCR,$dateVisite,$dateRapport,$bilanRapport,$motifVisite,$praticien)
{
    require"connect_bdd.php";

                $ajout = "INSERT INTO g2_rapport_visite(rap_cll_matricule, rap_num, rap_date_visite, rap_date, rap_bilan, rap_mot_code, rap_pra_num)
                VALUES('$matricule','$numCR','$dateVisite','$dateRapport','$bilanRapport','$motifVisite','$praticien')";
                $execAjout = $db -> prepare($ajout);
                $execAjout -> execute();
                return $execAjout;
                
}   

// Ajoute les médicaments présentés
function getAjoutMedicamentPresente($numCR, $matricule, $medicament)
{
    require"connect_bdd.php";
        $ajout = "INSERT INTO g2_presenter(pre_rap_num, pre_rap_cll_matricule, pre_med_depotlegal)
                VALUES('$numCR','$matricule','$medicament')";
                $execAjout=$db-> prepare($ajout);
                $execAjout -> execute();
                return $execAjout;
}

// Ajoute les medicaments offerts
function getAjoutOffre($numCR, $matricule, $medicamentCoche)
{
    require"connect_bdd.php";
        $ajout = "INSERT INTO g2_offrir(off_rap_cll_matricule, off_rap_num, off_med_depotlegal)
                VALUES('$matricule','$numCR','$medicamentCoche')";
                $execAjout=$db-> prepare($ajout);
                $execAjout -> execute();
                return $execAjout;
}

function getACVPracticiensInvites($acNum)
{
    require "connect_bdd.php";
    $sql=" select pra_nom, pra_prenom from g2_praticien
    inner join g2_inviter on inv_pra_num = pra_num
    where inv_ac_num = '$acNum'";
    $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;  
}
function getACVCollaborateursParticipants($acNum)
{
    require "connect_bdd.php";
    $sql=" select cll_nom, cll_prenom from g2_collaborateur
inner join g2_participer on cll_matricule = rea_cll_matricule
where rea_ac_num = '$acNum'";
    $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;  
}

//Affiche toutes les AC en rapport avec le matricule
function getlesAC($matricule)
{
    require "connect_bdd.php";
    $sql ="select distinct ac_num, ac_date, ac_theme, ac_validation, ac_cll_matricule, ac_budgetEstime, ac_lieu from g2_activite_compl inner join g2_collaborateur on ac_cll_matricule = cll_matricule inner join g2_travailler on tra_cll_matricule = cll_matricule
    where ac_date > NOW() and tra_cll_matricule = '$matricule'";
     $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;  
}
function getlesACDelegue($codeRegion)
{
    require "connect_bdd.php";
    $sql ="select distinct ac_num, ac_date, ac_theme, ac_validation, ac_cll_matricule, ac_budgetEstime, ac_lieu from g2_activite_compl inner join g2_collaborateur on ac_cll_matricule = cll_matricule inner join g2_travailler on tra_cll_matricule = cll_matricule
    where ac_date > NOW() and tra_reg_code = '$codeRegion'";
     $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;  
}

//Affiche tout les comptes-rendus
function getLesCR()
{
    require"connect_bdd.php";
    $sql="select *
          from g2_rapport_visite
          order by rap_date";
    //exécution de la requete
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;      
}

function getLesCrVisiteur($matricule)
{
    require"connect_bdd.php";
    $sql="select *
          from g2_rapport_visite
          where rap_cll_matricule = '$matricule'
          order by rap_date";
    //exécution de la requete
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;      
}

// Affiche un compte-rendu
function getLeCR($numCr, $matricule)
{
    require"connect_bdd.php";
    $sql="select * 
          from g2_rapport_visite
          Inner join g2_motif_visite on mot_code = rap_mot_code
          Inner join g2_praticien on pra_num = rap_pra_num
          where rap_num = $numCr AND rap_cll_matricule = '$matricule' ;";
    // exécution de la requête
    $exec=$db->prepare($sql);
    $exec->execute();
    // on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetch();
    return $curseur; 
          
}

// Affiche les médicaments présentés lié au compte-rendu
function getLesMedicamentsPresentes($numCR,$matricule)
{
    require"connect_bdd.php";
    $sql="select * 
          from g2_presenter
          where pre_rap_num = $numCR AND pre_rap_cll_matricule = '$matricule' ;";
    // exécution de la requête
    $exec=$db->prepare($sql);
    $exec->execute();
    // on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur; 
          
}

// Affiche les médicaments offerts lié au compte-rendu
function getLesMedicamentsOfferts($numCR, $matricule)
{
    require"connect_bdd.php";
    $sql="select * 
          from g2_offrir
          where off_rap_num = $numCR AND off_rap_cll_matricule = '$matricule' ;";
    // exécution de la requête
    $exec=$db->prepare($sql);
    $exec->execute();
    // on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur; 
          
}
// Détermine si un medicament à été offert
function existeMedicamentOffert ($depotLegal, $numCR, $matricule)
{
    require"connect_bdd.php";
    $sql="select * 
          from g2_offrir
          where off_rap_num = $numCR AND off_med_depotlegal = '$depotLegal' AND off_rap_cll_matricule = '$matricule'";
    // exécution de la requête
    $exec=$db->prepare($sql);
    $exec->execute();
    // on retourne un curseur contenant l'ensemble des lignes de la table
    if($exec->rowCount() == 0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

//Modifie les données contenu dans la table compte-rendue
function getModifierLeCr($numCR,$dateVisite,$dateRapport,$bilan,$motif,$praticien, $matricule)
{
    require"connect_bdd.php";
    $modification = "UPDATE g2_rapport_visite
                     SET rap_date_visite = '$dateVisite', rap_date = '$dateRapport', rap_bilan = '$bilan', rap_mot_code = '$motif', rap_pra_num = '$praticien'
                     WHERE rap_num = '$numCR' AND rap_cll_matricule = '$matricule';";
                $execModif = $db -> prepare($modification);
                $execModif -> execute();
                echo"<script>alert('Compte-rendu bien modifié');</script>";
                return $execModif;
} 

//Supprime tout les médicaments présentés lié au compte-rendu
function supprimerMedicamentPresente($numCR,$matricule)
{
    require"connect_bdd.php";
    $modification = "DELETE FROM g2_presenter
                     WHERE pre_rap_num = $numCR AND pre_rap_cll_matricule = '$matricule' ";
                $execModif = $db -> prepare($modification);
                $execModif -> execute();
                return $execModif;
}

// Supprime tout les médicaments offerts  lié au compte-rendu
function supprimerMedicamentOffert($matricule,$numCR)
{
    require"connect_bdd.php";
    $modification = "DELETE FROM g2_offrir
                     WHERE off_rap_num = '$numCR' AND off_rap_cll_matricule = '$matricule'";
                $execModif = $db -> prepare($modification);
                $execModif -> execute();
                return $execModif;
}

// Affiche le médicamanent le plus offert
function getMedicamentPlusOffert($matricule)
{
    require"connect_bdd.php";
    $modification ="SELECT med_nomcommercial, count(off_med_depotlegal) as total
                    from g2_offrir
                    inner join g2_medicament on off_med_depotlegal = med_depotlegal
                    where off_rap_cll_matricule = '$matricule'
                    GROUP BY med_nomcommercial 
                    LIMIT 1";
                $execModif = $db -> prepare($modification);
                $execModif -> execute();
                $curseur=$execModif->fetch();
                return $curseur;
}

// // Affiche le médicamanent le plus présenté
function getMedicamentPlusPresente($matricule)
{
    require"connect_bdd.php";
    $modification ="SELECT med_nomcommercial, count(pre_med_depotlegal) as total
                    from g2_presenter
                    inner join g2_medicament on pre_med_depotlegal = med_depotlegal
                    where pre_rap_cll_matricule ='$matricule'
                    GROUP BY med_nomcommercial
                    LIMIT 1";
                $execModif = $db -> prepare($modification);
                $execModif -> execute();
                $curseur=$execModif->fetch();
                return $curseur;
}

// // Affiche le praticien le plus visité
function getPraticienPlusVisite($matricule)
{
    require"connect_bdd.php";
    $modification ="SELECT pra_nom, pra_prenom, count(pra_nom) as total 
                    from g2_rapport_visite inner join g2_praticien on pra_num = rap_pra_num 
                    where rap_cll_matricule ='$matricule' 
                    GROUP BY pra_nom, pra_prenom LIMIT 1";
                $execModif = $db -> prepare($modification);
                $execModif -> execute();
                $curseur=$execModif->fetch();
                return $curseur;
}
/*------------------------------------MAXIME DELEGUE-----------------------------------*/

//Ajouter une activité complémentaire
function ajouterAC($date, $lieu, $theme, $cll_matricule, $budgetEstime)
{
    require "connect_bdd.php";
    $sql="insert into g2_activite_compl (ac_date, ac_lieu, ac_theme, ac_cll_matricule, ac_budgetEstime, ac_validation) VALUES('$date','$lieu','$theme', '$cll_matricule', $budgetEstime, 0)";
    
    $exec=$db->prepare($sql);
    $exec->execute(); 
    $numAC = $db->lastInsertId();
    return $numAC;
}
function ajoutParticipant($matricule,$acNum)
{
        
    require "connect_bdd.php";

    $sql="insert into g2_participer VALUES('$matricule',$acNum)";
    $exec=$db->prepare($sql);
    $exec->execute();
    return $exec;  
}
function ajoutInvite($PraticienNum, $acNum)
{
    require "connect_bdd.php";
    $sql="insert into g2_inviter VALUES('$PraticienNum',$acNum)";
    $exec=$db->prepare($sql);
    $exec->execute();
    return $exec; 
}

function getLesComptesRendus($region)
{
    require"connect_bdd.php";
    $sql="select  distinct rap_num, rap_date_visite, rap_date, rap_bilan, cll_nom, cll_prenom
          from g2_rapport_visite
          inner join g2_collaborateur on cll_matricule = rap_cll_matricule
          inner join g2_travailler on tra_cll_matricule = cll_matricule
          where tra_reg_code = '$region';
          order by rap_num";

    //exécution de la requete
    $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;      
}

function getACValideesAnnee($annee,$codeRegion)
{
    require"connect_bdd.php";
    $sql="select distinct ac_num, ac_date, ac_lieu, ac_theme,cll_nom,cll_prenom, ac_budgetEstime
    from g2_activite_compl inner join g2_collaborateur on ac_cll_matricule = cll_matricule 
    inner join g2_travailler on tra_cll_matricule = cll_matricule where YEAR(ac_date) = $annee and ac_validation = 1 and tra_reg_code = '$codeRegion'
    order by ac_num";

    //exécution de la requete
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll(); 
    return $curseur;      
}
function getStats()
{
    require"connect_bdd.php";
    $sql="select reg_nom, count(rap_num) as nb from g2_region 
inner join g2_travailler on tra_reg_code = reg_code 
inner join g2_collaborateur on tra_cll_matricule = cll_matricule
inner join g2_rapport_visite on rap_cll_matricule = cll_matricule
group by reg_nom
";
    //exécution de la requete
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
 
    return $curseur;   
}
function getStatsVisite($codeRegion)
{
    require"connect_bdd.php";
    $sql="select distinct cll_nom, cll_prenom, count(rap_cll_matricule) as nb from g2_collaborateur as nb
inner join g2_rapport_visite on rap_cll_matricule = cll_matricule 
inner join g2_travailler on tra_cll_matricule = cll_matricule 
where tra_reg_code = '$codeRegion' and tra_role_actuel = '1'
group by cll_nom, cll_prenom ";
    //exécution de la requete
    $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;   
}
function getCodeRegionDelegue($matricule)
{
    require "connect_bdd.php";
    $sql = "select tra_reg_code from g2_travailler where tra_cll_matricule = '$matricule' and tra_role_actuel = 1 " ;
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetch();
    return $curseur;   
}
function getDernierCR()
{
    require "connect_bdd.php";
    $sql = "SELECT max(rap_num) as nb FROM g2_rapport_visite";
   $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetch();
    return $curseur;
}
function getDernierAC()
{
        require "connect_bdd.php";
        $sql="select MAX(ac_num) as nb from g2_activite_compl";
        $exec=$db->prepare($sql) ;
        $exec->execute() ;
        //on retourne un curseur contenant l'ensemble des lignes de la table
        $curseur=$exec->fetch();
        return $curseur;  
}
function getRegion($code)
{
     require "connect_bdd.php";
        $sql="select distinct reg_nom from g2_region where '$code' = reg_code";
        $exec=$db->prepare($sql) ;
        $exec->execute() ;
        //on retourne un curseur contenant l'ensemble des lignes de la table
        $curseur=$exec->fetch();
        return $curseur;  
}
function getStatsMedicamentsPresentes($codeRegion)
{
    require"connect_bdd.php";
    $sql="select distinct med_nomcommercial, count(pre_rap_num) as nb
from g2_medicament
inner join g2_presenter on pre_med_depotlegal = med_depotlegal
inner join g2_rapport_visite on pre_rap_num = rap_num 
inner join g2_collaborateur on rap_cll_matricule = cll_matricule
inner join g2_travailler on tra_cll_matricule = cll_matricule
where tra_reg_code = '$codeRegion' and tra_role_actuel = '1'
group by med_nomcommercial";
    //exécution de la requete
    $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;   
}
function getStatsMedicamentsOfferts($codeRegion)
{
    require"connect_bdd.php";
    $sql="select distinct med_nomcommercial, count(off_rap_num) as nb
from g2_medicament
inner join g2_offrir on off_med_depotlegal = med_depotlegal
inner join g2_rapport_visite on off_rap_num = rap_num 
inner join g2_collaborateur on rap_cll_matricule = cll_matricule
inner join g2_travailler on tra_cll_matricule = cll_matricule
where tra_reg_code = '$codeRegion' and tra_role_actuel = '1'
group by med_nomcommercial";
    //exécution de la requete
    $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;   
}

function ajoutMedicamentOffert($matricule,$numCR,$med_DepotLegal)
{
    require"connect_bdd.php";
    $modification = "UPDATE g2_offrir
                     SET off_med_depotlegal = '$med_DepotLegal'
                     WHERE off_rap_num = '$numCR' AND off_rap_cll_matricule = '$matricule'";
                $execModif = $db -> prepare($modification);
                $execModif -> execute();
                return $execModif;
}
function getMedicamentsRapport($Rapport) 
{
     require "connect_bdd.php";
        $sql="select med_nomcommercial, count(*) as nb from g2_medicament inner join g2_offrir on off_med_depotlegal = med_depotlegal inner join g2_rapport_visite on off_rap_num = rap_num where off_rap_num = '$Rapport' group by med_nomcommercial";
         $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;   
}

function getMedicamentsRapportPresentes($Rapport) 
{
     require "connect_bdd.php";
        $sql="select med_nomcommercial, count(*) as nb from g2_medicament inner join g2_presenter on pre_med_depotlegal = med_depotlegal inner join g2_rapport_visite on pre_rap_num = rap_num where pre_rap_num = '$Rapport' group by med_nomcommercial";
         $exec=$db->prepare($sql);
    $exec->execute();
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;   
}

function getAjouterRapportDelegue($matricule,$numCR,$dateVisite,$bilanRapport,$motifVisite,$praticien)
{
    require"connect_bdd.php";

    $ajout = "INSERT INTO g2_rapport_visite(rap_cll_matricule, rap_num, rap_date_visite, rap_date, rap_bilan, rap_mot_code, rap_pra_num)
                VALUES('$matricule','$numCR','$dateVisite',NOW(),'$bilanRapport','$motifVisite','$praticien')";
    $execAjout = $db -> prepare($ajout);
    $execAjout -> execute();
    return $execAjout;
}   

function getLesCrVisiteurDelegue($reg_code)
{
    require"connect_bdd.php";
    $sql="select distinct cll_nom, cll_prenom, mot_code, rap_num, rap_date_visite, rap_date, rap_bilan, rap_cll_matricule, rap_mot_code,rap_pra_num, pra_prenom, pra_nom, mot_libelle from g2_rapport_visite inner join g2_collaborateur on cll_matricule = rap_cll_matricule inner join g2_travailler on cll_matricule = tra_cll_matricule inner join g2_motif_visite on rap_mot_code = mot_code inner join g2_praticien on rap_pra_num = pra_num inner join  g2_region on tra_reg_code = reg_code WHERE reg_code = '$reg_code'";
    //exécution de la requete
    $exec=$db->prepare($sql) ;
    $exec->execute() ;
    //on retourne un curseur contenant l'ensemble des lignes de la table
    $curseur=$exec->fetchAll();
    return $curseur;      
}

function SetMedicamentPresente($matricule,$numCR,$med_DepotLegal, $ancienMedicament)
{
    require"connect_bdd.php";
    $modification = "UPDATE g2_presenter
                     SET pre_med_depotlegal = '$med_depotLegal'
                     WHERE pre_rap_num = '$numCR' AND pre_rap_cll_matricule = '$matricule' AND pre_med_depotlegal = '$ancienMedicament';";
                $execModif = $db -> prepare($modification);
                $execModif -> execute();
                return $execModif;
}
?>

