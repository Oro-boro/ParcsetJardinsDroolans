# ParcsetJardinsDroolans
Travail de fin d'etude TFE

TRANSFERT du projet sur GitLab! Ce Dimanche 4 Avril. Cette version n'est donc plus mise à jour.

https://gitlab.com/Oro-boro


# ParcsetJardinsDroolans

Site TFE : ParcsetJardinsDroolans

--------------------------------------------------------------------------------------------------------------------------------------------------------------

## Fait :
- Template basique (priorité aux fonctionnalités).
- Toutes les pages sont accessibles.
- Favicon personnalisé de l'entreprise.
- Recréation du Logo de l'entreprise en haute résolution.
- Base de donnée.
- Password hash + Token.
- Recherche des services + image correspondante et leurs description dans la DB.
- Affichage des services, image + description via la DB.
- Acces au service désiré + affichage des images correspondantes à ce service via selection dans la DB (slugs).
- Gallerie "en Images" ne reprends que les images taggées selon une selection via boolean en DB.
- Formulaire "contact" fonctionnel (template a revoir).
- Mails, noms et messages stockés en DB.
- Envoi de mails / messages fonctionnel (en tout cas via MailCatcher!).


## A faire :
- Selection des images de la gallerie en 2 par 2, "avant", "apres".
- Refonte de la navigation.
- Interface Admin.
- Connection à l'interface admin via formulaire.
- Upload des images via interface Admin.
- Customisation de l'esthetique du site (couleur, typo, animation). 
  -> Actuellement en hybride Bootstrap (impersonnel, moche mais très fonctionnel).
  -> Css, JS etc.. A faire.
  -> Animation du logo (et plus?) via plugin BodyMovin et AfterEffect.
- Check de l'aspect "responsive".
- Le blabla RGPD.
- RGPD accessible via les pages + à l'envoi du mail. Case à cocher? IDK..
- (gadget - Useless?) Selection eventuelle de l'image du "service" par l'admin et affichage de cette derniere pour le service désiré.
- Autres (?)

## Mails stockés en DB, RAPPEL : Mettre en place un "cron" (Oui les dev adorent les acronymes pourris!) sur le serveur lors de la phase de Prod.
  -> Command : symfony console app:send-contact
