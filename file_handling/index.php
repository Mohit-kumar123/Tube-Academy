<?php
// if(file_exists("test.txt")){
//     echo readfile("test.txt");  
// }else{
//     echo "File not found";

// }


//read
// $file=fopen("test.txt","r");
// if($file){
//     while(($line=fgets($file))!==false){
//         echo $line. "<br>";
//     }
//     fclose($file);
// }else{
//     echo" eroor :unable to open file.";
// }


//write it will overwrite
// $file=fopen("test.txt","w");
// if($file){
//     fwrite($file,"Hello World");
//     fclose($file);
// }else{
//     echo" error :unable to open file.";

// }

//append
$file=fopen("test.txt","a");
if($file){
    fwrite($file,"Hello World is round but round is square and square is circle");
    fclose($file);
}else{
    echo" error :unable to open file.";

}

//read
$file=fopen("test.txt","r");
if($file){
    while(($line=fgets($file))!==false){
        echo $line. "<br>";
    }
    fclose($file);
}else{
    echo" error :unable to open file.";
}

//size of the file on the server
echo filesize("test.txt");

$sourcefile = "test.txt";

$destfile = "aditya.txt";

if(file_exists($sourcefile)){
    if(copy($sourcefile, $destfile)){
        echo "File copied";
    }
    else{
        echo "File not copied";
    }
}
else{
    echo "File doesn't exist";
}

//delete the file
if(unlink($destfile)){
    echo "File deleted";
}
else{
    echo "File not deleted";
}

//rename the file
if(rename("aditya.txt", "aditya1.txt")){
    echo "File renamed";
}
else{
    echo "File not renamed";
}


//size of the file
echo filesize("test.txt");

//end of the file
$file=fopen("test.txt","a");
if($file){
    fwrite($file,"Hello World is round but round is square and square is circle");
    fclose($file);
}else{
    echo" error :unable to open file.";

}


//eof
$file=fopen("test.txt","r");
if($file){
    while(!feof($file)){
        echo fgets($file). "<br>";
    }
    fclose($file);
}else{
    echo" error :unable to open file.";
}

//delete the file
if(unlink("test.txt")){
    echo "File deleted";
}
else{
    echo "File not deleted";
}

//rename the file
if(rename("aditya1.txt", "aditya.txt")){
    echo "File renamed";
}
else{
    echo "File not renamed";
}


//copy the file
if(copy("aditya.txt", "aditya1.txt")){
    echo "File copied";
}
else{
    echo "File not copied";
}

?>