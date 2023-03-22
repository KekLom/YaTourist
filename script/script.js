var a=0;
fn=function(){
	if(a==0){
		map1.innerHTML='<img src="img/map.jpg"> <div id="t1-1"><p class="t">Чочур Муран</p></div> <div id="t1-2"><p class="t">Бэргэн</p></div> <div id="t1-3"><p class="t">Мархинский дом</p></div> <div id="t1-4"><p class="t">Пегас туристик</p></div> <div id="t1-5"><p class="t">Лазурный берег</p></div><div id="t1-6"><p class="t">Полярная звезда</p></div><div id="t1-7"><p class="t">Ленские зори</p></div><div id="t1-8"><p class="t">Усть-Буотамкая</p></div><div id="t1-9"><p class="t">Батамай-Тур</p></div><div id="t1-10"><p class="t">Курулуур</p></div><div id="t1-11"><p class="t">Сосновый бор</p></div>';
	}else if(a==1){
		map1.innerHTML='<img src="img/map1.jpg">';
	}else if(a==2){
		map1.innerHTML='<img src="img/map2.jpg">';
	// }else if(a==3){
		// map1.innerHTML='<img src="img/map3.jpg">';
	// }else if(a==4){
		// map1.innerHTML='<img src="img/map4.jpg">';
	// }else if(a==5){
		// map1.innerHTML='<img src="img/map5.jpg">';
	}
};
minus.onclick=function(){
	if(a==0){
		a=a;
	}else{
		a--;
	}
	fn();
}
plus.onclick=function(){
	if(a==2){
		a=a;
	}else{
		a++;
	}
	fn();
}