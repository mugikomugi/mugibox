// JavaScript Document
$(function(){

	//ローダー設定
	jQuery('head').append(
		'<style type="text/css">body { display: none; } #fade, #loader { display: block; }</style>');
	jQuery.event.add(window,"load",function() { // 全ての読み込み完了後に呼ばれる関数
	var pageH = jQuery("body").height();

	jQuery("#fade").css("height", pageH).delay(900).fadeOut(800);
	jQuery("#loader").delay(600).fadeOut(300);
	jQuery("body").css("display", "block");
	});
	
	//フェードスクロール
	var setArea = jQuery('.event');

	jQuery('#wrapper nav ul').hide();//テキストを非表示
	setArea.css({display:'block',opacity:'0'});
	
	jQuery(window).on('load scroll resize',function(){
		setArea.each(function(){
			var areaTop = jQuery(this).offset().top;

			if (jQuery(window).scrollTop() >= (areaTop + 200) - jQuery(window).height()){
				jQuery(this).stop().animate({opacity:'1'},2000);
				jQuery('.bound li',this).addClass('move');//キーフレームアニメつけてみる
			} else {
				jQuery(this).stop().animate({opacity:'0'},1000);
				jQuery('.bound li',this).removeClass('move');
			}
		});
	});
	
	//ナビゲーション　カスタマイズ
	var showFlug = false;
	var navgate = jQuery('#wrapper nav ul');
	//最初非表示
	navgate.css('display', 'none');

	//スクロールが500に達したらナビ表示
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 400) {
		if (showFlug == false) {
			showFlug = true;
			navgate.stop().slideDown(800);
		}
		} else {
		if (showFlug) {
		showFlug = false;
		navgate.stop().slideUp(800);
            }
        }
    });
	
	
	//TOP雲アニメーション
	var part_1= jQuery('.cloud_1');
	var part_2= jQuery('.cloud_2');
	var part_3= jQuery('.cloud_3');
	var part_4= jQuery('.cloud_4');
	var part_5= jQuery('.cloud_5');
	var part_6= jQuery('.cloud_6');
	
	//1個目の雲
	function cloud_anime(){
		part_4.animate({"left":"900px"},5500,"linear");
		part_1.animate({"left":"900px"},5500,"linear",
			function(){
				part_4.fadeOut('slow');
				part_1.fadeOut('slow',
				function(){
					part_4.css('left','-50px').fadeIn(800);
					part_1.css('left','-50px').fadeIn(800);
					cloud_anime();
				});
			});
		}
	//2個目の雲
	function cloud_anime2(){
		part_5.animate({"left":"900px"},6000,"linear");
		part_2.animate({"left":"900px"},6000,"linear",
		function(){
			part_5.fadeOut('slow');
			part_2.fadeOut('slow',
			function(){
				part_5.css('left','0').fadeIn(800);
				part_2.css('left','0').fadeIn(800);
				cloud_anime2();
			});
		});
	}
	//3個目の雲
	function cloud_anime3(){
		part_6.animate({"left":"900px"},7000,"linear");
		part_3.animate({"left":"900px"},7000,"linear",
		function(){
			part_6.fadeOut('slow');
			part_3.fadeOut('slow',
			function(){
				part_6.css('left','0').fadeIn(800);
				part_3.css('left','0').fadeIn(800);
				cloud_anime3();
			});
		});
	}
	cloud_anime();
	cloud_anime2();
	cloud_anime3();
	
	

});
