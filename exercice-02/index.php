<?php
/**
 * Plugin Name: Show_social_network
 * Description: Un mini plugin wordpress permettant d'afficher une liste de réseaux sociaux via un shortcode
 * 
 * Author:      NEKRASHEVYCH Olha
 * Version:      1.0

 */
add_shortcode('show_social_network', 'add_social_network');
 
    function add_social_network () {
        return  
        '<h2>La liste :</h2>
        <ul><li> Facebook : <a href="https://www.facebook.com/">https://www.facebook.com/ </a></li>
            <li> Instagram : <a href="https://www.instagram.com/">https://www.instagram.com/</a></li>
            <li> Linkendin : <a href="https://www.linkendin.com/">https://www.linkendin.com<a></li>
			<li>GitHub : <a href="https://github.com/honoagency">https://github.com/honoagency</a></li>
        </ul>';

    }
    