<?php
/**
 * Galacticum team
 * 
 * @author Miguel Gonzalez <miguel-gonzalez@gmx.de>
 * @since 1.0
 * @version 1.0
 * @link http://my-reality.de Website of the author
 * @copyright (c) 2013, Miguel Gonzalez
 */
include_once 'Team/TeamMember.php';
include_once 'Team/TeamView.php';

class GalacticumTeam extends TeamView {
   
    public function __construct() {
        parent::__construct();
        
        // Miguel
        $miguel = new TeamMember('Miguel Gonzalez', 'Developer');
        $miguel->setEmail('miguel-gonzalez@gmx.de');
        $miguel->setWebsiteURL('http://my-reality.de');
        $miguel->addSocialNetwork(new SocialNetwork('twitter', 'https://twitter.com/tweetmyreality', 'Twitter'));
        $miguel->addSocialNetwork(new SocialNetwork('googleplus', 'https://plus.google.com/u/0/103183029519102261612', 'Google+'));
        
        $this->addMember($miguel);

	// Reinier
	$reinier = new TeamMember('Reinier Klarenberg', 'Developer');
	$reinier->setEmail('reinierklarenberg@gmail.com');
	$reinier->addSocialNetwork(new SocialNetwork('twitter', 'https://twitter.com/DreamBreacher', 'Twitter'));
 	$reinier->addSocialNetwork(new SocialNetwork('googleplus', 'https://plus.google.com/u/0/102178017952456150111', 'Google+'));


	$this->addMember($reinier);
	
	
	// Dennis
	$dennis = new TeamMember('Dennis Pawlik', 'Developer');
	$dennis->setEmail('pawlik.dennis@gmail.com');

	$this->addMember($dennis);
    }
}

?>
