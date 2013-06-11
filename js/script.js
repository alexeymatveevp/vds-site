$(function() {
    $('#navSection a').click(function(e) {
        $(this).tab('show');
    });
    $('#nowSection').addClass('active');

    // past page
    $('#pastSection').children().hide();
    $('#pastSection :first-child').show();
    $('#pastProducts a').click(function() {
        $('#pastProducts').parent().hide();
        var target = $(this).next().val();
        $(target).show();
    })
});