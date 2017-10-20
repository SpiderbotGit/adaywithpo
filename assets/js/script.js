function sort(){
    var data = $('#data').val();
    var splitData = data.split("\n");

    $.ajax({
        url: "logic.php",
        data: {'data' : data},
        type: 'POST',
        async: false,
        success: function(data){
            console.log(data);
            var dataArray = $('#returnData').val(data);


            // var table_id = document.getElementById('baby_table');
            //for loop
            //create (tr)
        }
    });
}