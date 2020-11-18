<?php
/**
 * @translation     XooFoo.org (http://www.xoofoo.org/)
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: ISO-8859-1
 *
 * @Translator      kris (http://www.xoofoo.org)
 *
 * @version         $Id $
 **/

if (!defined('_NOCOMMENTS_MODULE_NAME')) {
    define('_NOCOMMENTS_MODULE_NAME', 'Ajout Commentaires');
    define('_NOCOMMENTS_MODULE', 'Comment ajouter les commentaires dans tout module');
    define('_NOCOMMENTS_MODULEDESC', 'Comment ajouter la fonction de commentaires dans tout module XOOPS.');
    define(
        '_NOCOMMENTS_BEGIN',
        'Ce module montre la m�thode dont fonctionne ce hack ainsi que la description des modifications � apporter � vos modules. Il n\'y a pas d\'importance si votre module  utilise SQL ou non, vous pouvez maintenant construire un module simple avec un fichier index.php contenant par exemple seulement un javascript, et toujours obtenir des commentaires sur ce module.'
    );
    define('_NOCOMMENTS_AUTHOR', 'Ce hack est rendu possible gr�ce � la collaboration entre Culex et Runeher. Unissons nos forces dans XOOPS, et ensemble faisons bouger les choses ! :)');
    define('_NOCOMMENTS_BEGIN2', 'Il y a quelques op�rations pour l\'impl�menter :');
    define('_NOCOMMENTS_BEGIN3', 'Premi�rement, copier les dossiers et fichiers suivants dans le r�pertoire de votre module :');

    define(
        '_NOCOMMENTS_BEGIN4',
        '
<ul><li>comment_delete.php</li>
<li>comment_edit.php</li>
<li>comment_new.php</li>
<li>comment_post.php</li>
<li>comment_reply.php</li>
<li>comment_view.php</li>
<li>commentform.php</li>
<li>display_comments.php</li>
<li>extra_functions.php</li>
<li>Dossier"<strong>js</strong>" (ou ajouter les fichiers dans le dossier "js" existant).</li>
<li>Dossier "language" (ou ajouter dans language/french/noitemcomments_lang.php � votre dossier existant de langue).</li></ul>
'
    );

    define('_NOCOMMENTS_BEGIN5', 'Ensuite, vous devez connecter les commentaires � votre module en ajoutant 3 "include" comme d�crit ci-dessous. Rechercher les lignes comment�es et copiez les dans votre module. N\'oubliez pas de changer le nom du module dans les fichiers.');

    define('_NOCOMMENTS_BEGIN6', 'Ensuite, proc�dez comme ceci :');

    define(
        '_NOCOMMENTS_BEGIN7',
        '<ul><li>Ouvez le fichier xoop_version.php de <strong>ce module</strong> et copiez les lignes comment�es dans  le xoops_version.php de <strong>votre module</strong>.</li>
<li>Ouvrez le fichier display_comments.php et faites comme indiqu� � la ligne 41.</li>
<li>Ouvrez le fichier preloads/core.php et suivez les indications des lignes comment�es.</li></ul>'
    );

    define(
        '_NOCOMMENTS_BEGIN8',
        '<p>Au final : <strong>Mettez � jour votre module !</strong></p><p>Nota : ce hack requiert une version XOOPS version 2.4.0 ou sup�rieure. <a href="https://www.xoops.org/modules/core/" rel="external">Mettre � jour sa version de XOOPS</a> si vous d�sirez le mettre en oeuvre !</p><div style="font-size:1.1em; font-weight: bold; text-align: center;"><a href="#">T�l�charger le code Source</a></div>'
    );
}
