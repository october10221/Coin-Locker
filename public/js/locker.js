// gobalvar
var totalpoint = 0;
var sizelocker = 0;
// var hour = 0;

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

$(document).ready(function() {
    setInterval(autoreload, 1000);
});

function showmodal(id,size,status) {
    clearcoin();
    sizelocker = size;
    $( "#numberlocker" ).html( id );
    $('#namelocker').val(id);
    if(status == 0){
        $('#modalRegisterForm').modal('show');
    }else{
        // $('#modelerror').modal('show');
        $.ajax({
            type: "POST",
            url: 'getdatalocker',
            data: {id:id},
            success: function (data) {
                if(data == 1){
                    bootbox.confirm({ 
                        size: "small",
                        message: "ต้องการรับสินค่าคืนหรือไม่?",
                        callback: function(result){ 
                            if(result == true){
                                $.ajax({
                                    method: "POST",
                                    url: "returnlocker",
                                    data: {id:id},
                                    success: function (data) {
                                        bootbox.alert("ทำรายการสำเร็จ");
                                    }
                                   });
                            }else{
                                console.log(id);
                            }
                         }
                    })
                }else{
                    bootbox.alert(data);
                }
            }
          });
    }
}



function autoreload() {
    $( "#reload" ).load( " #reload" );
}

function calpoint(point) {
    var hour = 0;
    totalpoint =  totalpoint+point;
    $('#yourpoint').val(totalpoint);
    //คำนวณเวลาของsize S
    if(sizelocker == 0){
        if(totalpoint >= 50){
            hour = hour+1;
            //ตัดราคา1ชั่วโมงแรกไปก่อน
           var first60minutes = totalpoint-50;
            //หารที่เหลือเพื่อหาชั่วโมงต่อไป
            var nextminutes = first60minutes/25;
            hour = hour+nextminutes;
            $('#hour').val(hour|0);  // |0 คือปัดเศษทิ้ง
        } 
    }
     //คำนวณเวลาของsize M
     if(sizelocker == 1){
        if(totalpoint >= 100){
            hour = hour+1;
            //ตัดราคา1ชั่วโมงแรกไปก่อน
           var first60minutes = totalpoint-100;
            //หารที่เหลือเพื่อหาชั่วโมงต่อไป
            var nextminutes = first60minutes/50;
            hour = hour+nextminutes;
            $('#hour').val(hour|0);  // |0 คือปัดเศษทิ้ง
        } 
    }
     //คำนวณเวลาของsize L
     if(sizelocker == 2){
        if(totalpoint >= 200){
            hour = hour+1;
            //ตัดราคา1ชั่วโมงแรกไปก่อน
           var first60minutes = totalpoint-200;
            //หารที่เหลือเพื่อหาชั่วโมงต่อไป
            var nextminutes = first60minutes/100;
            hour = hour+nextminutes;
            $('#hour').val(hour|0); // |0 คือปัดเศษทิ้ง
        } 
    }
}

function clearcoin() {
    totalpoint =  0;
    hour = 0;
    $('#yourpoint').val(totalpoint);
    $('#hour').val(hour);
}


