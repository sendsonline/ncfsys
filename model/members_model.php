<?php
class Members_Model extends Model {
    function __construct(){
        parent:: __construct();
    }

    function addMember(){
        $Members = new Members();
        $Members->lastname = $_POST['lastname'];
        $Members->firstname = $_POST['firstname'];
        $Members->middlename = $_POST['middlename'];
        $Members->age = $_POST['age'];
        $Members->birthday = $_POST['birthday'];
        $Members->address = $_POST['address'];
        $Members->waterBap = $_POST['water_bap'];
        $Members->hgBap = $_POST['hg_bap'];
        $Members->gender = $_POST['gender'];
        $Members->profPic = '';
        $Members->addDate = date('Y:m:d h:i:s');
        $Members->lifeVerse = $_POST['life_verse'];


        $user = DAOFactory::getMembersDAO()->insert($Members);
        // if(!empty($id)){
        //     echo"<script>alert('Added');window.location.href='".URL."/members';</script>";
        // }
        // else{
        //     echo"<script>alert('Something went wrong!');window.location.href='".URL."/members';</script>";
        // }


        // echo $user_info->emailAddress;
        $pull="select * from userImage  where user='$user'";
        $allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
        $extension = @end(explode(".", $_FILES["file"]["name"]));


        if ((($_FILES["file"]["type"] == "image/gif")
                    || ($_FILES["file"]["type"] == "image/jpeg")
                    || ($_FILES["file"]["type"] == "image/JPG")
                    || ($_FILES["file"]["type"] == "image/jpg")
                    || ($_FILES["file"]["type"] == "image/png")
                    || ($_FILES["file"]["type"] == "image/PNG")
                    || ($_FILES["file"]["type"] == "image/pjpeg"))

                    && in_array(strtolower($extension), $allowedExts))
                    {

                        if ($_FILES["file"]["error"] > 0)
                        {
                        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                        }
                        else
                        {


                            if (file_exists("public/uploads/" . $_FILES["file"]["name"]))
                            {
                                unlink("".URL."public/uploads/"  . $_FILES["file"]["name"]);
                            }
                            else{
                                $pic=$_FILES["file"]["name"];
                                $conv=explode(".",$pic);
                                $ext=$conv['1'];
                                move_uploaded_file($_FILES["file"]["tmp_name"],"public/uploads/". $user.".".$ext);
                                "Stored in as: " . "".URL."public/uploads/".$user.".".$ext;
                                $url=$user.".".$ext;

                                echo $profilePicture = $url;
                                DAOFactory::getMembersDAO()->updatePicture($profilePicture,$user);
                                echo "<script>alert('Profile Information Saved!');window.location.href='../members';</script>";

                             }
                        }

                    }else{
                     echo "<script>alert('Your picture had a file size which is greater than 200 KB. Please choose a lesser size! Thank you!');window.location.href='../members';</script>";
                    }

    }

    



    function updateProfile(){
        $Members = new Members();
        $Members->id = $_POST['user_id'];
        $Members->lastname = $_POST['lastname'];
        $Members->firstname = $_POST['firstname'];
        $Members->middlename = $_POST['middlename'];
        $Members->age = $_POST['age'];
        $Members->birthday = $_POST['birthday'];
        $Members->address = $_POST['address'];
        $Members->waterBap = $_POST['water_bap'];
        $Members->hgBap = $_POST['hg_bap'];
        $Members->gender = $_POST['gender'];
        $Members->profPic = $_POST['user_id'].".jpg";
        $Members->addDate = $_POST['add_date'];

        $Members->lifeVerse = $_POST['life_verse'];


        $us = DAOFactory::getMembersDAO()->update($Members);
        // if(!empty($id)){
        //     echo"<script>alert('Added');window.location.href='".URL."/members';</script>";
        // }
        // else{
        //     echo"<script>alert('Something went wrong!');window.location.href='".URL."/members';</script>";
        // }
        $user = $_POST['user_id'];

        // echo $user_info->emailAddress;
        $pull="select * from userImage  where user='$user'";
        $allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
        $extension = @end(explode(".", $_FILES["file"]["name"]));


        if ((($_FILES["file"]["type"] == "image/gif")
                    || ($_FILES["file"]["type"] == "image/jpeg")
                    || ($_FILES["file"]["type"] == "image/JPG")
                    || ($_FILES["file"]["type"] == "image/jpg")
                    || ($_FILES["file"]["type"] == "image/png")
                    || ($_FILES["file"]["type"] == "image/PNG")
                    || ($_FILES["file"]["type"] == "image/pjpeg"))

                    && in_array(strtolower($extension), $allowedExts))
                    {

                        if ($_FILES["file"]["error"] > 0)
                        {
                        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                        }
                        else
                        {


                            if (file_exists("public/uploads/" . $_FILES["file"]["name"]))
                            {
                                unlink("".URL."public/uploads/"  . $_FILES["file"]["name"]);
                            }
                            else{
                                $pic=$_FILES["file"]["name"];
                                $conv=explode(".",$pic);
                                $ext=$conv['1'];
                                move_uploaded_file($_FILES["file"]["tmp_name"],"public/uploads/". $user.".".$ext);
                                "Stored in as: " . "".URL."public/uploads/".$user.".".$ext;
                                $url=$user.".".$ext;

                                echo $profilePicture = $url;
                                DAOFactory::getMembersDAO()->updatePicture($profilePicture,$user);
                    echo "<script>alert('Profile Information Saved!');window.location.href='../members';</script>";

                             }
                        }

                    }else{
                     echo "<script>alert('Your picture had a file size which is greater than 200 KB. Please choose a lesser size! Thank you!');window.location.href='".URL."members';</script>";
                    }

    }

    function deleteProfile(){
        $u = DAOFactory::getMembersDAO()->delete($_POST['id']);
        if(!empty($u)){
            echo "<script>alert('Successfuly Deleted!');window.location.href='../members';</script>";
        }
    }

}