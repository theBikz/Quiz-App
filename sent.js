
function viewsentence(){
    var sentence=document.getElementById("sent");
    var form_data=new form_data;
    form_data.append('sentence',sentence);

    $.ajax({
        url: 'final.php',
        data: formData,
        type: 'POST',
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false, // NEEDED, DON'T OMIT THIS
        // ... Other options like success and etc
    });
}