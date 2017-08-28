
function carga_file() {
        var inputFileImage = document.getElementById("file1");
        var file = inputFileImage.files[0];
        var data = new FormData();

        data.append('archivo', file);
        var url = "upload.php";
        $.ajax({
            url: url,
            type: 'POST',
            contentType: false,
            data: data,
            processData: false,
            cache: false
        }).done(function(data){
        	if(data.ok){
        		console.log("se subio con exito")
        	}else {
        		alert(data.msg)
        	}
        });

    }
