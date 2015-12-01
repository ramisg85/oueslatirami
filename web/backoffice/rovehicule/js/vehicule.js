/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function chargerModele(Marque)
{
    var url = Routing.generate('ro_vehicule_remplir_modele');
    var idSelectMarque = Marque.attr('id');
    var idSelectModele = 'ro_vehicule_vehiculetype_modele';
    //alert(idMarque);

    $.ajax({type: "POST",
        url: url,
        data: {'idMarque': idMarque},
        dataType: 'JSON',
        timeout: 30000,
        success: function (data) {
            var modeles = data[0];
           
            //réinitialise la liste des modeles
            $(idSelectModele).html('<option value> -- Tous -- </option>');
            
             //met à jour la liste des modeles
             $.each(data, function () {
                 
             var id = modeles.id;
             var denomination = modeles.denomination_modele;
             alert($(idSelectModele));
             /*
             $(idSelectModele).append('<option value="' + id + '">' + denomination + '</option>');*/
             });
        },
        error: function () {
            alert('Erreur, la connexion au serveur a été interrompue');
        }
    });
}


