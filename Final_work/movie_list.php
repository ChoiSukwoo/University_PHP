<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<!-- 랜덤이미지 링크 -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="./css/randomImg.css?2">
<link rel="stylesheet" type="text/css" href="./css/viewstyle.css?7">
<link rel="stylesheet" type="text/css" href="./css/common.css?2">
<link rel="stylesheet" type="text/css" href="./css/main.css?2">


<script>
   function movie_name(type) {
        name = document.getElementById("search_input").value;
        if(name!=''){
            location.href="movie_list.php?type="+type+"&search="+name ; 
        }else{
            location.href="movie_list.php?type="+type; 
        }
    }

    function change_movie_page(type) {
        data = "movie_list.php?type="+type
        if(document.getElementById("search_input_h").value!=''){
            data=data+"&search="+document.getElementById("search_input_h").value
        }
        page = document.getElementById("inputtext").value
        data=data+"&page="+page
        location.href=data
    }
</script>

<?php 
    include_once 'mvvm/xmlExtract.php'; 
    include_once 'mvvm/viewAdapter.php'; 

    if(isset($_GET["page"])){$page = $_GET["page"];}else{$page='1';}; 
    if(isset($_GET["search"])){$search = $_GET["search"];}else{$search='';}; 
    $type = $_GET["type"];
    $result = extract_xml($type,$page,$search) ;
    //페이지수가 복수일경우 페이지 계산
    if(isset($result->totCnt)){
        $totalpage = $result->totCnt;
        $totalpage = ($totalpage-($totalpage%10))/10+1;
    }else{
        $totalpage = 1;
    }
    
?>

</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
	<section>
        <div id="main_content">
            <?php if($type=="allmovie"){ ?>
                <form name="mvname" id="search_box">
                    <div id = search_title> 영화이름 검색창 </div>
                    <input type="text" name="name" id="search_input" value="<?=$search?>"> <input type="button" value="검색" onclick="movie_name('<?=$type?>')" id="search_button">
                    <input  type='text' value="<?=$search?>" id='search_input_h' style='display:none'>
                </form>
            <?php } ?>

            <div style="float: left;">
                <?= movie_list_adapter($type,$result);?>
            </div>
        </div>
        <!--전체영화 보이길때 페이지 선택창-->
        <?php if($type=="allmovie"){ ?>
            <form name="mvpage" style="margin:auto; width:160px; margin-bottom : 20px;">
                <input id="inputtext" name="page" type="text" value="<?=$page?>"> / <?=$totalpage?> 
                <input type="button" value="확인" onclick="change_movie_page('<?=$type?>')"> 
            </form>
        <?php } ?>
	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>
