<?php

/**
 * Controler 
 */


include_once './Models/Classes/Utils/Constants.php';
include_once './Models/Classes/Utils/Uconnection.php';
include_once './Models/Classes/DB/AbstractDB.php';
include_once './Models/Classes/DB/impl/AdminMysqlImpl.php';
include_once './Models/Classes/Facade.php';
include_once './Models/Classes/DB/DTO/Login.php';
include_once './Models/Classes/DB/DTO/User.php';
include_once './Models/Classes/DB/DTO/Movie.php';
include_once './Models/Classes/DB/DTO/Actors.php';
include_once './Models/Classes/DB/DTO/Directors.php';
include_once './Models/Classes/DB/DTO/Series.php';
include_once './Models/Classes/DB/DTO/Chapters.php';


if(!isset($_SESSION['test'])){
    session_start();
    $_SESSION['test']="test";
}

$facade=new Facade();


if(isset($_POST['ids'])){
    $id=$_POST['ids'];
    
    switch($id){
        case AUTHENTICATION:
            include './Controler/authentication.php';
         break;
        case SAVEMODIFYUSER:
            include './Controler/ModifyUser.php';
            break;
        case CONFUSERDELETED:
            include './Controler/DeleteUsers.php';
         break;
        case SAVEMODIFYMOVIE:
            include './Controler/ModifyMovie.php';
            break;
        case DELMOVIES:
            include './Controler/DeleteMovies.php';
            break;
        case CONFNEWCHAPTER:
            include './Controler/AddChapterSerie.php';
            break;
        case SAVEMODIFYSERIE:
            include './Controler/ModifySerie.php';
            break;
        case DELETESERIE:
            include './Controler/DeleleteSeries.php';
            break;
     
     default : include './views/adminLogin.php'; break;
        
        
    }
       
}elseif(isset($_GET['ids'])){
    
        $id=$_GET['ids'];
    
    switch($id){
        case BACK:
            include './views/userpanel.php';
            break;
        case BACKMOVIES:
            include './views/moviespanel.php';
            break;
        case BACKSERIES:
            include './views/seriespanel.php';
            break;
        case LOGOUT:
            include './Controler/Logout.php';
         break;
        case USERPANEL:
            include './views/userpanel.php';
            break;
        case USERMODIFY:
            include './views/modifiuser.php';
            break;
        case USERDELETED:
            include './views/confirmdeleteuser.php';
            break;
        case MOVIESPANEL:
            include './views/moviespanel.php';
            break;
        case MOVIESMODIFY:
            include './views/modifimovies.php';
            break;
        case ACTORSMOVIE:
            include './views/addmovieactor.php';
            break;
        case DELMOVIEACTOR:
            include './Controler/DelMovieActors.php';
            break;
        case ADDACTORMOVIE:
            include './Controler/AddActorMovie.php';
            break;
        case DIRECTORSMOVIES:
            include './views/addmoviedirector.php';
            break;
        case ADDDIRECTORMOVIES:
            include './Controler/AddDirectorMovie.php';
            break;
        case DELDIRECTORMOVIES:
            include './Controler/DelDirectorMovie.php';
            break;
        case SERIESPANEL:
            include './views/seriespanel.php';
            break;

        case CONFDELETEMOVIES:
            include './views/confdelmovies.php';
            
            break;
        case MODIFYSERIES:
            include './views/modifyseries.php';
            
            break;
        case CONFDELETESERIES:
            include './views/confdelserie.php';
            break;
        case DELETESERIE:
            
            break;
        case ACTORSERIES:
            include './views/addserieactor.php';
            break;
        case ADDACTORSERIE:
            include './Controler/AddActorSerie.php';
            break;
        case DELSERIEACTOR:
            include './Controler/DeleteSeriesActor.php';
            break;
        case DIRECTORSERIES:
            include './views/addseriedirector.php';
            break;
        case ADDDIRECTORSERIES:
            include './Controler/AddDirectorSerie.php';
            break;
        case DELDIRECTORSERIE:
            include './Controler/DelDirectorSerie.php';
            break;
        
        case DELCHAPTERSERIE:
            include './Controler/DelChapterSerie.php';
            break;
        case ADDNEWCHAPTER:
            include './views/confnewchapter.php';
            break;
     default : include './views/adminLogin.php'; break;
    
}
}
else{
    
include './views/adminLogin.php';
    
}





?>