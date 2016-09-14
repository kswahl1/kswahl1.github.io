<?php require_once "templates/header.html"; ?>



    <!-- /header -->

    <div id="x-section-1" class="x-section bg-image parallax top_intro full-image init_1 init_2">
        <div class="x-container max width" style="margin: 0px auto;padding: 0px;">
            <div class="x-column x-sm x-1-2 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                <a class="x-img x-img-link x-img-none" data-toggle="modal" data-target="#myModal">
                    <img src="images/burnBan.png">
                </a>
            </div>
            <div class="col-md-4 pull-right" id="frontHeading">
                <h1 class="wow fadeInRight text-center" data-wow-duration="2s" data-wow-delay="1s"><span>Protecting lives and property from fire
                <span class='spacer'></span>
                </h1>
                <p class="wow fadeInRight text-left">
                    <span class="firstcharacter">O</span>ur vision: We are dedicated and committed to being a progressive and attentive community-focused Fire and Rescue service. We work, as a team, to promote health and safety through prevention to those
                    entrusted in our care.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="sectionTwo" style="padding-top:100px; padding-bottom: 100px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h1>Fire Danger for <span id="demo"></span></h1></div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-1 fireDanger"><img class="x-img mbn x-img-none" src="images/burnNotice/Low-On.png"></div>
            <div class="col-md-2 fireDanger"><img class="x-img mbn x-img-none" src="images/burnNotice/Moderate-Off.png"></div>
            <div class="col-md-2 fireDanger"><img class="x-img mbn x-img-none" src="images/burnNotice/High-Off.png"></div>
            <div class="col-md-2 fireDanger"><img class="x-img mbn x-img-none" src="images/burnNotice/VeryHigh-Off.png"></div>
            <div class="col-md-2 fireDanger"><img class="x-img mbn x-img-none" src="images/burnNotice/Extreme-Off.png"></div>
        </div>
    </div>

    <div class="container-fluid sectionThree" id="sectionThree" style="padding-top:100px; padding-bottom: 100px; background-color:#ed1b24;">
        <div class="row">
            <div class="col-md-5 col-md-offset-1" style="padding-bottom:30px">
                <h1 class="text-center">Station 501</h1>
                <div class="google-maps">
                    <!-- <iframe width="500" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJvwLA4PVMW4YRiyui2kWv9aA&key=AIzaSyDozIhGpm5tiUBgw4EMbFhaJvhvrgi4X5U" allowfullscreen></iframe> -->
                </div>
            </div>

            <div class="col-md-5">
                <h1 class="text-center">ESD #5 Info</h1>
                <div class="mjs-object-content">

                    <p>ESD #5 is tranistioniong from a staffing model employing part time staff to a model employing full time staff.</span>
                    </p>

                    <p>Due to the transition, Fire Station 501 will be closed at times due to short staffing. &nbsp;Operations will be run out of Station 503 unless staffing levels change. &nbsp; &nbsp;</span>
                    </p>

                    <p>On June 12, ESD#5 will vacate out of statoin 503 as the primary service provder and will move all operations back to station 501. &nbsp;The Austin Fire Department will begin operations out of Station 503 on June 12th. &nbsp;</span>
                    </p>

                    <p><a class="clickable" data-toggle="modal" data-target="#infoModel" style="color:#dba500;">More Information on ESD5 changes can be found here</a></p>
                </div>
            </div>
        </div>
    </div>
    <section class="footer">
        <div class="col-md-4 col-md-offset-2">
            <h3>Manchaca Fire Rescue</h3>
            <p>
                665 West Farm to Market 1626, <br> Austin, TX 78748 <br> P: 512-282-7057 <br> F: 512-282-4485 <br> DIAL 911 FOR EMERGENCIES <br> An Equal Opportunity Employer
            </p>
        </div>
        <div class="col-md-4">
            <h3>Follow us on Social media:</h3>

            <p>
                <a class="social-foot" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a><br>
                <a class="social-foot" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a><br>
                <a class="social-foot" href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a><br>

                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope-o" aria-hidden="true" style="color: orange;"></i> Sign up For our Newsletter </h4>

                <div class="textfield textfield--floatingLabel" id="search">
                    <input class="textfield__input" type="text" required="required" id="homeSearch" />
                    <label class="textfield__label" for="HomeSearch">Email Address</label><button type="sutmit"><i class="fa fa-arrow-circle-o-right fa-2x" aria-hidden="true"></i></button>
                </div>
            </p>
        </div>
    </section>

    <!-- modal popup for burn specific information -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire" aria-hidden="true" style="color: orange;"></i> Controlled Burn Info </h4>
                </div>
                <div class="modal-body">
                    <div class="mjs-object-content">
                        <p>

                            <span class="firstcharacter">W</span>hen there is no burn ban in Travis County, please follow these simple instructions if you plan to burn within Travis County ESD #5 jurisdiction (the unincorporated areas of South Travis
                            County which includes: Manchaca area, Shady Hollow, San Leanna, Onion Creek Meadows and Bear Creek):
                        </p>
                        <p>
                            Call our controlled burn hotline at <b>512-282-7057 ext. 112</b> and listen to the instructions. Please leave your name, address of the controlled burn and phone number as well as the date and times you are planning on burning.
                        </p>
                        <p>
                            Here are some common questions people have about controlled burning:
                        </p>
                        <p><b>What materials can I burn when there is no burn ban?</b>
                            <br/> You may only burn limbs, leaves and straw that originated on your property.
                        </p>
                        <p>
                            <b>Can I burn old furniture, discarded tires, or other construction debris?</b>
                            <br/> No.
                        </p>
                        <p>
                            <b>Can I bring trimmings/brush from another property and burn it on mine?</b>
                            <br/> No.
                        </p>
                        <p>
                            <b>Other important info:</b>
                            <br/>
                            <i class="fa fa-asterisk" aria-hidden="true"></i> Keep burn piles under 10' x 10' x 5'
                            <br/>
                            <i class="fa fa-asterisk" aria-hidden="true"></i> Keep burn piles at least 50 feet away from all structures and any other combustible materials, including tall grasses. Clear an area down to the soil so that your controlled
                            burn stays within that area. Fires in approved containers shall be kept at least 25 feet from any structure.
                            <br/>
                            <i class="fa fa-asterisk" aria-hidden="true"></i> Keep burn piles supervised at all times. Never leave them unattended.
                            <br/>
                            <i class="fa fa-asterisk" aria-hidden="true"></i> Always keep a garden hose or other adequate water supply within reach of the burn pile.
                            <br/>
                            <i class="fa fa-asterisk" aria-hidden="true"></i> Always extinguish the burn pile by dusk. Controlled burns are prohibited after dark.
                        </p>
                        <p>If you have any other questions regarding controlled burns, please call our Prevention division at 512-282-7057 ext. 130.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- info modal with ESD Info -->
    <div class="modal fade" id="infoModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-info" aria-hidden="true" style="color: orange;"></i> ESD #5 INFO</h4>
                </div>
                <div class="modal-body">
                    <p><span class="firstcharacter">T</span>ravis County Emergency Services District No. 5 is the political subdivision of the State of Texas responsible for providing Fire, EMS First Responder, and other emergency services to the Shady Hollow
                        area -- as well as the greater ESD 5 area. ;The voters of ESD 5 created the District in 1985 to improve and enhance the services previously provided by Manchaca Volunteer Fire Department. ;Since that time, emergency services have
                        evolved from a volunteer fire department, to a Rural Fire Prevention District, to the current emergency services district.</span>
                    </p>



                    <p>Since 1968, emergency services were provided by the Manchaca Volunteer Fire Department, a Texas Non-Profit Corporation and volunteer fire department, either on its own, or later through a contract with ESD 5, which was created by the
                        taxpayers and residents of ESD 5. ;All emergency services provided outside of the City of Austin and the City of Sunset Valley have been provided by emergency services districts such as ESD 5.
                    </p>

                    <p>There are currently 14 fire departments in Travis County, including 13 emergency services district in Travis County covering all of the area outside of the City, including the 14 other incorporated cities in Travis County from San
                        Leanna, to Lago Vista, to Pflugerville. ;Over the years the Travis County ESDs have transitioned away from reliance on volunteers as the primary responders to actually retaining full-time, paid and certified fire fighters and EMS
                        first responder personnel. ;EMS ambulance services have been historically provided by Travis County through a contract with the City of Austin EMS Department. ;
                    </p>

                    <p>Until 2004, ESD 5 was served by a dedicated group of MVFD volunteers who risked their lives on a daily basis responding to emergencies for Shady Hollow, Manchaca, San Leanna, and the other areas incorporated into ESD 5 after 1985.
                        ;Since 2004, MVFD began employing, in addition to its fine volunteer members, paid fire and EMS personnel to meet the ever growing demands of increased call volumes, types of emergencies, volunteer work schedules, and the provision
                        of enhanced levels of emergency services. ;This has been a common theme for all ESDs in Travis County that provide services outside Austin and Sunset Valley. ;MVFD did this by making many of their volunteers paid employees. ;The
                        majority of these individuals had full-time jobs elsewhere and would come into MVFD for extra part time work or volunteer service.
                    </p>

                    <p>When the fire station on Brodie Lane was built several years ago by the Shady Hollow Municipal Utility District for ESD 5, it was built to City of Austin specifications knowing that eventually when Shady Hollow was annexed, it would
                        become a City fire station. ;Part of the agreement between the SHMUD, the City, and ESD 5 allows for the City through the Austin Fire Department to co-occupy the fire station with the ESD. ;
                    </p>

                    <p>In late 2015, the City identified several of its areas in which response times for fire and EMS services were falling below its standard of coverage within the City. ;The Austin Fire Department identified the possibility of using the
                        station on Brodie as an area that would greatly improve its performance, and have since requested to fully occupy the station with Austin Fire Department personnel beginning June 12, 2016. ;As part of this transition, Shady Hollow
                        will continue to be in ESD 5, while its residents would not be annexed into the City or pay City of Austin taxes.
                    </p>

                    <p>Rather than have duplication of services by having ESD 5 and AFD equipment and personnel in the same station, it was determined by the City and ESD 5 it would most efficient for ESD5 personnel to vacate the station and consolidate
                        operations to its new station on FM 1626, with AFD providing services to not only to the ESD 5 area along Brodie Lane but also the newly annexed areas of the City from the Shady Hollow station on Brodie Lane.
                    </p>

                    <h4>What does this mean to you?</h4>

                    <p>Around June 12, ESD 5 will move its personnel and equipment out of the station on Brodie Lane as Austin Fire Department moves their personnel and equipment into the station to serve the areas along Brodie Lane, both in the City and
                        ESD 5. ;There will be NO lapse or decrease in emergency services provided to you even though you are still residents of ESD 5. This transition has been in cooperation between the City, Shady Hollow MUD, the ESD, and other surrounding
                        emergency services districts.
                    </p>

                    <p>The City and ESD 5 are working on an agreement where areas of the City and ESD 5 will be served by either department, depending on the location and type of emergency, essentially eliminating jurisdictional boundaries and providing
                        service from the closest, most appropriate resources, whether from ESD 5, the City, or surrounding emergency services districts. ;The goal is to provide the highest level of services in the fastest time possible for all residents
                        of ESD 5 and the City.
                    </p>

                    <p>Shady Hollow and the Estates of Shady Hollow residents will primarily be responded to by the Austin Fire Department and ESD 5 will continue to also provide emergency services in this area as appropriate. ;This does NOT mean your taxes
                        will change! ;In fact, due to an agreement being made with the ESD, you will be taxed the same as you are now until the year 2020 when the City of Austin plans to annex Shady Hollow.
                    </p>

                    <p>If you should have any questions about your emergency services, you may contact ESD#5 President Dennis Wright at dwright@tcesd5.org or ;Chief Chris Barron, TCESD No. 5 at cbarron@tcesd5.org or 512.282.7057.</span>
                    </p>

                    <p>Sincerely,
                    </p>

                    <p>TRAVIS COUNTY EMERGENCY <br>SERVICES DISTRICT NO. 5</p>

                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script src="js/jquery.okayNav.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://use.typekit.net/ylf3ctc.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
