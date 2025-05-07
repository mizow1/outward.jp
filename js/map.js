/*-----------------------------------------------------------------------------------*/
/*	Google Map
/*-----------------------------------------------------------------------------------*/

	// id属性の指定
	 var mapDiv = document.getElementById( "map" ) ;

	 // 位置座標を変数mapPositionに代入
	 var mapPosition = {
		 lat: 33.570398 ,// 緯度
		 lng: 130.318075 // 経度
	 };
	 // 地図のオプション
	 var mapOptions = {
		 center: mapPosition ,
		 zoom: 16 ,//最初に表示される地図の倍率
	 } ;

	 // Mapクラスを変数mapに代入
	 var map = new google.maps.Map( mapDiv, mapOptions ) ;

	 var marker = new google.maps.Marker({
	     position: mapPosition,
	     map: map,
	     icon: new google.maps.MarkerImage(
	       'https://www.outward.jp/wp/wp-content/themes/ow/img/marker.png',//マーカー画像URL
	       new google.maps.Size(101, 84),//マーカー画像のオリジナルサイズ
	       new google.maps.Point(0, 0),//マーカー画像表示の起点（変更しない）
	       new google.maps.Point(50, 42),//マーカー位置の調整(横幅, 高さ)
				 new google.maps.Size( 50, 42 )  // 画像のサイズを変更する場合はコチラで設定する


	     ),
	 });
	 // グーグルマップのグレースケール化

	 var mapStyle = [ {
            "stylers": [ {
            "saturation": -100
            } ]
        } ];
        var mapType = new google.maps.StyledMapType(mapStyle);
            map.mapTypes.set( 'GrayScaleMap', mapType);
            map.setMapTypeId( 'GrayScaleMap' );
		// グーグルマップのグレースケール化
