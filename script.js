
function carga_file1() {
        var inputFileImage = document.getElementById("file1");
        var inputNic = document.getElementById("nic");
        var inputPol = document.getElementById("nploiza1");
        var file = inputFileImage.files[0];
        var data = new FormData();

        data.append('archivo', file);
        data.append('nic', inputNic);
        data.append('pol', inputPol);
        var url = "http://190.24.138.149/mobile/sura/carga/upload.php";
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

function carga_file2() {
        var inputFileImage = document.getElementById("file2");
        var inputNic = document.getElementById("nic");
        var inputPol2 = document.getElementById("nploiza2");
        var file = inputFileImage.files[0];
        var data = new FormData();

        data.append('archivo', file);
        data.append('nic', inputNic);
        data.append('pol', inputPol2);
        var url = "http://190.24.138.149/mobile/sura/carga/upload2.php";
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

