const returnValidation = () => {
    const name = document.getElementById("name");
    const pword = document.getElementById("pword");

    if (name == "" && pword == "") {
        alert("UserName Field & Pasword Field are Empty");
        return false;
    } else if (id.length == "") {
        alert("User Name is empty");
        return false;
    } else if (ps.length == "") {
        alert("Password field is empty");
        return false;
    }
}