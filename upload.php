<?php

$conn = mysqli_connect("localhost","root","","file_upload");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM files2";
$result = mysqli_query($conn, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql = "SELECT COUNT(*) AS totfiles FROM files2";
$result1 = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_assoc($result1);
$totalFiles = $row1['totfiles'];

$sql = "SELECT SUM(downloads) AS downcount FROM files2";
$result2 = mysqli_query($conn, $sql);
$row2 = mysqli_fetch_assoc($result2);
$totalDownloads = $row2['downcount'];


if(isset($_POST['submit'])){
    
    $file=$_FILES['file'];
    $filename=$file['name'];
    $filetmpname=$file['tmp_name'];
    $filesize=$file['size'];
    $fileerror=$file['error'];
    $filetype=$file['type'];
    $branchtemp=$_POST['branch'];
    $branch=strtolower($branchtemp);
    $semno=$_POST['semester'];
    $yearno=$_POST['year'];
    $tempsubname=$_POST['subject'];
    $subname=strtolower($tempsubname);

    $fileext=explode('.',$filename);
    $fileactualext=strtolower(end($fileext));

    $allowed= array('jpg','pdf','pptx','jpeg');
    if(in_array($fileactualext,$allowed)){
        if($fileerror === 0)
        { 
            if($filesize < 10000000000){
          
          $filedestination='uploads/'.$filename;
          move_uploaded_file( $filetmpname,$filedestination);
          $sql = "INSERT INTO files2 (name,subject,size,downloads,branch,year,sem) 
          VALUES('$filename','$subname','$filesize',0,'$branch',$yearno,$semno)";
         if(mysqli_query($conn,$sql)){
            
         }
        }
        else{
            echo "file size too large";
        }
        }else{
            echo "error in uploading";
        }

    }else{
        echo "file type not supported file extension must be 'jpg','pdf','pptx','jpeg'";
    }
}

if(isset($_GET['file_id']))
{
$id = $_GET['file_id'];
$sql="SELECT * FROM files2 WHERE id=$id";
$result = mysqli_query($conn,$sql);

$file = mysqli_fetch_assoc($result);


$filepath= 'uploads/' .$file['name'];

if (file_exists($filepath)) {
    header('Content-Type: application/octet-stream');
    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment;filename=' . basename($filepath));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));

    readfile($filepath);

    $newcount = $file['downloads'] + 1;
    echo "ID: $id, New Count: $newcount";

    $updquery = "UPDATE files2 SET downloads=$newcount WHERE id=$id";
    $result3 = mysqli_query($conn, $updquery);

    if (!$result3) {
        die("Error in update query: " . mysqli_error($conn));
    }

    exit;
}

}

mysqli_close($conn);

?>