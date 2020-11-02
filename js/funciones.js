$(document).ready(function () {
    $("#randomSelect").click(function () {
        var select = document.getElementsByClassName('rol');
        for (var i=0; i<select.length; i++){
			if (i % 2 == 0){
				if( i < select.length){
					var e = i+1;
					var items = select[i].getElementsByTagName('option');
					var items = select[e].getElementsByTagName('option');
					var index = Math.floor(Math.random() * items.length);
					select[i].selectedIndex = index;
					if (index == 0){
						select[e].selectedIndex = (index + 1);
					}else{
						select[e].selectedIndex = (index - 1);
					}
				}
			}
		}
		
    });
});

$(document).ready(function () {
    $("#randomSelect").click(function () {
		//console. clear()
        var select = document.getElementsByClassName('grupo');
        var grupos = [];
        for (var i=0; i<select.length; i++){
			if (i % 2 == 0){
				if( i < select.length){
					var e = i+1;
					var items = select[i].getElementsByTagName('option');
					var items = select[e].getElementsByTagName('option');
					var index = Math.floor(Math.random() * items.length);
					//console.log("original index " + index)
					//if(i > 1){
					
					while (check_grupo(grupos,index)==1){
						//console.log("index: " + index + " | array: "+ grupos);
						var index = Math.floor(Math.random() * items.length);
						//console.log("index: " + index + " | array: "+ grupos + " | new index: " + index)
					}
					//s}
					grupos.push(index)
					select[i].selectedIndex = index;
					select[e].selectedIndex = index;
					
				}
			}
		}
		//console.log(grupos);
		var grupos = [];
    });
});

function check_grupo(array,index){
	var result = 0;
	for(var i=0;i<array.length;i++){
		if (array[i] == index){
			result = 1;
		}
	}
	return result;
}
