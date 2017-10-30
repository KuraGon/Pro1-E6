function getXhr(){
    var xhr = null; 
    if(window.XMLHttpRequest) // Firefox et autres
       xhr = new XMLHttpRequest(); 
    else if(window.ActiveXObject){ // Internet Explorer 
       try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    else { // XMLHttpRequest non supporté par le navigateur 
       alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
       xhr = false; 
    } 
    return xhr;
}

function SendMail()
{
    if(document.getElementById("Contact").value!="Veuillez sélectionner...")
    {
        if(document.getElementById("Nom").value!="")
        {
            if(document.getElementById("Mail").value!="")
            {
                if(document.getElementById("Commentaire").value!="")
                {
                    var xhr = getXhr();
                    xhr.onreadystatechange = function(){
                            if(xhr.readyState == 4 && xhr.status == 200){
                                alert("Votre mail a bien été envoyé");
                            }
                    }
                    xhr.open("POST","asset/PHP/SendMail.php",true); 
                    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                    xhr.send("Contact="+document.getElementById("Contact").value+"&Nom="+document.getElementById("Nom").value+"&Mail="+document.getElementById("Mail").value+"&Commentaire="+document.getElementById("Commentaire").value);
                }
                else
                {
                    alert("Et votre message?");
                }
            }
            else
            {
                alert("Quel est votre mail");
            }
        }
        else
        {
            alert("Quel est votre nom?");
        }
    }
    else
    {
        alert('Veuillez choisir une raison');
    }
    return false;
}

function MapVP() {
var mapOptions = {
    center: new google.maps.LatLng(43.294332, 5.367718),
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("mapVP"), mapOptions);
}
