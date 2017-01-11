$(document).ready(function(){
    $('#show_quantity').click(function(){
        $.ajax({
            url: '',
            data: '0',
            cache: false,
            success: function(html){
                $alert(1);
            }
        });
    });
});


//
// $(document).ready(function(){
//     $('#show_quantity').click(function(){
//         $.ajax({
//             url: 'ajax_servlet.php',
//             data: 'id='+$('#pos_id').val(),
//             cache: false,
//             success: function(html){
//                 $('#content').html(html);
//             }
//         });
//     });
// });