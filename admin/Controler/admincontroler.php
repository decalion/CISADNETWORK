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
include_once './Models/Classes/DB/DTO/Recipes.php';
include_once './Models/Classes/DB/DTO/Books.php';
include_once './Models/Classes/DB/DTO/Author.php';
include_once './Models/Classes/DB/DTO/News.php';
include_once './Models/Classes/DB/DTO/Group.php';
include_once './Models/Classes/DB/DTO/GroupMember.php';
include_once './Models/Classes/DB/DTO/Singer.php';
include_once './Models/Classes/DB/DTO/CDS.php';
include_once './Models/Classes/DB/DTO/Songs.php';



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
        case SAVEMODIFYCOOKS:
            include './Controler/ModifyCooks.php';
            break;
        case DELETECOOKS:
            include './Controler/DelCooks.php';
            break;
        case SAVEMODIFYBOOKS:
            include './Controler/ModifyBooks.php';
            break;
        case DELBOOKS:
            include './Controler/DelBooks.php';
            break;
        case SAVEMODIFYNEWS:
            include './Controler/ModifyNews.php';
            break;
        case DELNEWS:
            include './Controler/DelNews.php';
            break;
        case ADDSONG:
            include './Controler/AddSongs.php';
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
        case BACKCOOKRECIDE:
            include './views/cookspanel.php';
            break;
        case BACKBOOKS:
            include './views/bookspanel.php';
            break;
        case BACKMUSIC:
            include './views/musicpanel.php';
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
        case COOKSPANEL:
            include './views/cookspanel.php';
            break;
        case MODIFYCOOKS:
            include './views/modifycooks.php';
            break;
        case CONFDELETECOOKS:
            include './views/confdelcooks.php';
            break;
        case BOOKSPANEL:
            include './views/bookspanel.php';
            break;
        case MODIFYBOOKS:
            include './views/modifybooks.php';
            break;
        case CONFDELBOOKS:
            include './views/confdelbooks.php';
            break;
        case AUTHORBOOKS:
            include './views/addauthorbooks.php';
            break;
        case ADDAUTHORSBOOK:
            include './Controler/AddAuthorBooks.php';
            break;
        case DELAUTHOR:
            include './Controler/DelAuthorBooks.php';
            break;
        case NEWSPANEL:
            include './views/newspanel.php';
            break;
        case MODIFYNEWS:
            include './views/modifynews.php';
            break;
        case CONFDELNEWS:
            include './views/confdelnews.php';
            break;
        case MUSICPANEL:
            include './views/musicpanel.php';
            break;
        case MODIFYMUSIC:
            include './views/modifymusic.php';
            break;
        case CONFDELMUSIC:
            include './views/confdelmusica.php';
            break;
        case DELSINGER:
            
            break;
        case MUSICSINGER:
            
            break;
        case DELCDS:
            include './Controler/DelCds.php';
            break;
        case MUSICD:
            
            break;
        case MODIFYCD:
            include './views/modifycd.php';
            break;
        case CDSSONGS:
            include './views/addcdsongs.php';
            break;
        case DELSONGS:
            include './Controler/DelSongs.php';
            break;
     default : include './views/adminLogin.php'; break;
    
}
}
else{
    
include './views/adminLogin.php';
    
}





?>