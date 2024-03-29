<?php 
    include_once "dbhHandler.php";
    
    if(!isset($_COOKIE["userId"]) || !isset($_COOKIE["userName"]))
    {
        header("location: ../settings.php?error=nologin");
        exit();
    }
    $id = $_COOKIE["userId"];
    $results = getSettings($id, $conn);
    
    $array = explode(",",$results);
    //echo $results;
    
    
    $theme = $array[0];
    $wpm = $array[1];
    $percent = $array[2];
    $truetyping = $array[3];
    $error = $array[4];
    $backspace = $array[5];
    
    setcookie("theme", $theme, time() - (86400), "/");  
    setcookie("wpm", $wpm, time() - (86400), "/");  
    setcookie("percent", $percent, time() - (86400), "/");  
    setcookie("truetyping", $truetyping, time() - (86400), "/");  
    setcookie("error", $error, time() - (86400), "/");  
    setcookie("backspace", $backspace, time() - (86400), "/");
    
    setcookie("theme", $theme, time() + (86400), "/");  
    setcookie("wpm", $wpm, time() + (86400), "/");  
    setcookie("percent", $percent, time() + (86400), "/");  
    setcookie("truetyping", $truetyping, time() + (86400), "/");  
    setcookie("error", $error, time() + (86400), "/");  
    setcookie("backspace", $backspace, time() + (86400), "/");

    //header("location: ../settings.php?set=".$theme.",".$wpm.",".$percent.",".$truetyping.",".$error.",".$backspace);
    header("location: ../settings.php");
    exit();

    
    function getSettings($id, $conn)
    {
        
        $sql = "SELECT * FROM users WHERE userId=?"; 
        $stmt = $conn->prepare($sql); 
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result(); 
        $resultData = $result->fetch_assoc();
        
        
        
        $settings = $resultData['userSettings'];
        
        
        
        return $settings;

    }
