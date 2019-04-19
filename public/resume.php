<?php
require '../core/session.php';

checkSession();

$meta=[];
$meta['title']='AI\'s Resume';

$content=<<<EOT
         
        <h1 align="center">Aileen C</h1>
        <div align="center">
                LomiLomiAve. &#x25CF;
                Honolulu, Hi, 97812 &#x25CF;
                nunya@nunyabiz.com

        </div>
        <h2 align="center">Full Stack Web Developer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div>
            <ul>
                    <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </li>
                    <li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</li>
                </ul>
        </div>
        <div >
            <h3 align="center">Core Competencies</h3>
                <div class="resume-wrapper">
                    <div class='row'>
                            <div class='column'>
                                <div class='columnOne'>
                                    <ul>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>JavaScript</li>
                                    </ul>
                                </div>
                            </div>
                            <div class='column'>
                                <div class='columnTwo'>
                                    <ul>
                                            <li>CSS</li>
                                            <li>Java</li>
                                            <li>Python</li>
                                    </ul>
                                </div>
                           </div>
                    </div>
                </div>

            <h3 align="center">Certifications / Technical Proficiencies</h3>
            <div class="resume-wrapper">
                    <div class='row'>
                            <div class='column'>
                                <div class='columnCert1'>
                                        <i>Certifications </i>: </br>
                                        <i>Platforms </i>: </br> 
                                        <i>Database </i>: </br>
                                        <i>Tools </i>: </br>
                                        <i>Languages </i>: 
                    
                                </div>
                            </div>
                            <div class='column'>
                                <div class='columnCert2'>
                                        Cyber Security</br>
                                        Windows, Linux, Chrome, LAMP, MEAN</br>
                                        MySQL, MongoDB</br>  
                                        VS Code, SSH, Gulp Git</br> 
                                        Java, Python, HTML, CSS, JavaScript, ES6, PHP                                         
                                </div>
                           </div>
                    </div>
                </div>       
                <br>     

            <h3 align="center">Professional Experience</h3>
                <p style="text-align:left;"><strong>Lolo Custom Websites - Honolulu, HI</strong><span style="float:right;">  <strong>2011 - Present</strong></span></br>Lolo Custom Websites builds website and apps for the local Hawai'i businesses.</p>
                <p><strong>Web Developer</strong></p>  
                    <ul>
                            <li>Worked with HTML, CSS, JavaScript, mySQL</li>
                            <li>Developed Apps</li>
                            <li>Promoted businesses</li>
                    </ul>     
                
                <p><i>Key Contributions</i></p>  
                    <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                    </ul>
                    
            <h3 align="center">Education</h3>
                <p style="text-align:left;">University of Hawai'i Manoa - Honolulu, HI<span style="float:right;"> 2012 - 2015</span></br><strong>Master of Science in Computer Science</strong></p>
                <p style="text-align:left;">DePaul University - Chicago, IL<span style="float:right;"> 2007 - 2011</span></br><strong>Master of Science in Computer Science</strong></p>

EOT;

require '../core/layout.php';
