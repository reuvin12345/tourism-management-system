$(document).ready(function(){
    function loadData(){
        $.ajax({
            url: 'comment/select-data.php',
            type: 'POST',
            success: function(data){
                $("#content").html(data);
            }
        });
    }

    loadData();

    $("#btn").on("click", function(e){
        e.preventDefault();
        var name = $("#name").val();
        var msg = $("#msg").val();

        $.ajax({
            url: 'comment/insert-data.php',
            type: 'POST',
            data: {name: name, msg: msg},
            success: function(data){
                if (data == 1) {
                    loadData();
                    alert('Comment Submitted Successfully.');
                    $("#form").trigger("reset");
                }else {
                    alert("Comment Can't Submit.");
                }
            }
        });
    });
});