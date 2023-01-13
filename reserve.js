/*
var btn =document.getElementsById("btn"); 
var pd = document.getElementClassName("pd");

function check(){
	
	if(pd === 0){
		alert("請選擇您要的蛋糕品項")
	}else{
		alert("請選擇您購的蛋糕品項及其數量");
	}	
	
}

*/

	var n1 = document.getElementsById("n1");
	var n2 = document.getElementsById("n2");
	var n3 = document.getElementsById("n3");
	var n4 = document.getElementsById("n4");
	var n5 = document.getElementsById("n5");

	function check(){
		if(n1===0 && n2===0 && n3 && n4===0 && n5===0){
			alert("請選擇您要選購的蛋糕品項及其數量");
		}else{
			alert("1111");
		}
	}

	/*btn.addEventListener("click",check);

	
	function check(){
		if(pd===0){
			alert("請選擇您要選購的蛋糕品項及其數量");
		}else{
			
		}


	}
*/
