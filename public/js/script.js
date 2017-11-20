function role_changed(role){
    if(role.value == "firm")
        show_firm();
    else if(role.value == "advisor")
        show_advisor();
    else
        show_iclient();
}

function show_firm(){
    document.getElementById('div_advisor').style.display = "none";
    document.getElementById('div_firm').style.display = "";

    document.getElementById('firm_code').required = false;
    document.getElementById('firm_name').required = true;
    document.getElementById('address').required = true;
    document.getElementById('suburb').required = true;
    document.getElementById('state').required = true;
    document.getElementById('postcode').required = true;
    document.getElementById('firm_website').required = true;
    document.getElementById('firm_phone').required = true;
}

function show_advisor(){
    document.getElementById('div_advisor').style.display = "";
    document.getElementById('div_firm').style.display = "none";

    document.getElementById('firm_code').required = true;
    document.getElementById('firm_name').required = false;
    document.getElementById('address').required = false;
    document.getElementById('suburb').required = false;
    document.getElementById('state').required = false;
    document.getElementById('postcode').required = false;
    document.getElementById('firm_website').required = false;
    document.getElementById('firm_phone').required = false;
}

function show_iclient(){
    document.getElementById('div_advisor').style.display = "none";
    document.getElementById('div_firm').style.display = "none";
    document.getElementById('company_position').style.display = "none";

    document.getElementById('firm_code').required = false;
    document.getElementById('firm_name').required = false;
    document.getElementById('address').required = false;
    document.getElementById('suburb').required = false;
    document.getElementById('state').required = false;
    document.getElementById('postcode').required = false;
    document.getElementById('firm_website').required = false;
    document.getElementById('firm_phone').required = false;
    document.getElementById('company_position').required = false;

}
