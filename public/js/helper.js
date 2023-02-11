const showError = (obj, errors) => {
    let string = '<div class = "alert alert-danger" > <ol class = "mb-0 list-group list-group-numbered">';
    errors.forEach(element => {
        string += '<li class = "d-block" >' + element + '</li>';
    });
    string += '</ol></div>';
    obj.html(string);
}