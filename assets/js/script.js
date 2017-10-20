// On button click get baby text names
$(document).ready(function(){
    $("input#sortBtn").click(function(){
        
        //Get Baby Names
        var babyNames = $("textarea#namesTextArea").val();
        //Each baby information
        var eachBaby = babyNames.split("\n");
        //Sort the baby names
        eachBaby.sort();

        for(var i = 0; i < eachBaby.length; i++){
            var babyDetails = eachBaby[i].split(",");
            var name = babyDetails[0];
            var gender = babyDetails[1];
            var id = babyDetails[2];
            $('#myTable').append($('<tr>')
            .append($('<td>').append(name))
            .append($('<td>').append(gender))
            .append($('<td>').append(id))
          )
        }
        

    });
});
