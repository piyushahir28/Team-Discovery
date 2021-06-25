<link rel="stylesheet" href="contact.css">

<body>
    <div class="container">
        <div class="innerwrap">

            <section class="section1 clearfix">
                <div class="textcenter">
                    <span class="shtext">Contact Us</span>
                    <span class="seperator"></span>
                    <h1>Drop Us a Mail</h1>
                </div>
            </section>

            <section class="section2 clearfix">
                <div class="col2 column1 first">
                    <div class="sec2map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.116099006!2d72.74109925453989!3d19.082197839051503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1624464152717!5m2!1sen!2sin"
                            width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" frameborder="0"></iframe></div>
                    <!-- <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div class="sec2map" style='overflow:hidden;height:550px;width:100%;'>
                        <div id='gmap_canvas' style='height:100%;width:100%;'></div>
                        <div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div>
                        <div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div>-->
                    <style>
                        #gmap_canvas img {
                            max-width: none!important;
                            background: none!important
                        }
                    </style>
                    <!-- </div>
                    <script type='text/javascript'>
                        function init_map() {
                            var myOptions = {
                                zoom: 14,
                                center: new google.maps.LatLng(19.075314480255834, 72.88153973865361),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(19.075314480255834, 72.88153973865361)
                            });
                            infowindow = new google.maps.InfoWindow({
                                content: '<strong>My Location</strong><br>mumbai<br>'
                            });
                            google.maps.event.addListener(marker, 'click', function() {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script> -->
                </div>
                <div class="col2 column2 last">
                    <div class="sec2innercont">
                        <div class="sec2addr">
                            <p>45 BC, a Latin professor at Hampden-Sydney College in Virginia</p>
                            <p><span class="collig">Phone :</span> +91 976885083</p>
                            <p><span class="collig">Email :</span> vivek.mengu016@gmail.com</p>
                            <p><span class="collig">Fax :</span> +91 9768850839</p>
                        </div>
                    </div>
                    <div class="sec2contactform">
                    <form id="contact" action="process.php" method="POST">
                        <h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
                            <div class="clearfix">
                                <input class="col2 first" type="text" name="firstname" id="firstname" pattern="[A-Za-z ]{1,32}" placeholder="First Name" required>

                                <input class="col2 last" type="text" name="lastname" id="lastname" pattern="[A-Za-z]{1,32}" placeholder="Last Name" required>

                            </div>
                            <div class="clearfix">
                                <input class="col2 first" type="Email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Email" required>

                                <input class="col2 last" type="text" name="phone" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Contact Number" required>
                            </div>
                            <div class="clearfix">
                                <textarea  name="message" id="message" cols="30" rows="7" required placeholder="Your message here..."></textarea>

                            </div>
                            <div class="clearfix"><input type="submit" value="Send"></div>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
</body>