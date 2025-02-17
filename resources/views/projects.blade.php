@extends('layouts.master')

@section('title', 'Aynaur')

@section('main-container')

<section class="projects container-fluid" id="portfolio" style="padding-top: 100px;margin-bottom:0;padding-bottom:100px;background:#feefee;">
    <div class="projects-wrapper">
        <div class="container-lg">
            <h1>Social media content we created</h1>
            <div class="spacer"></div>
            <!-- <div class="projects-btn">
                <button id="btn-all">All</button>
                <button id="btn-health">Health & Wellness</button>
                <button id="btn-beauty">Beauty & Cosmetics</button>
                <button id="btn-medical">Medical</button>
                <button id="btn-realEstate">Real Estate</button>
                <button id="btn-kids">Kids</button>
                <button id="btn-pets">Pets</button>
            </div> -->
            <div class="project-list">
            <div class="project-item category-health" data-modal-target="#exampleModal-1">
                    <img src="{{asset('assets/img/1.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel-1" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#1</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/1.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Tired of chasing the wrong crowd? It’s not always about reaching everyone; it’s about connecting with the right people. Your message matters. When it resonates, it echoes through the noise.</p>
                                    <ol>
                                        <li>Know your audience: Understand their needs, wants, and desires.</li>
                                        <li>Craft a compelling message: Make it clear, concise, and unforgettable.</li>
                                        <li>Choose the right platforms: Where does your target audience hang out?</li>
                                        <li>Be consistent: Reinforce your brand identity across all channels.</li>
                                    </ol>
                                    <p>Remember, less is often more. Quality over quantity. Are you ready to find your perfect audience?</p>

                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>NetworkingSuccess <i class="fa-solid fa-hashtag"></i>ProfessionalExpert <i class="fa-solid fa-hashtag"></i>CustomerRetention <i class="fa-solid fa-hashtag"></i>NetworkingMastery <i class="fa-solid fa-hashtag"></i>SalesPsychology <i class="fa-solid fa-hashtag"></i>BusinessAsset <i class="fa-solid fa-hashtag"></i>BusinessInnovation <i class="fa-solid fa-hashtag"></i>Psychology <i class="fa-solid fa-hashtag"></i>GeneralMarketing <i class="fa-solid fa-hashtag"></i>MarketingGoals <i class="fa-solid fa-hashtag"></i>EffectiveMarketing <i class="fa-solid fa-hashtag"></i>AudienceDevelopment
                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-item category-beauty" data-modal-target="#exampleModal-2">
                    <img src="{{asset('assets/img/2.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#2</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/2.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Every brand has a narrative - a reason for being. It's what sets you apart, resonates with your audience, and drives loyalty. Your story is your brand's soul. It’s what turns customers into advocates.</p>
                                    <p>Do you need help finding your brand's voice? Let's craft a narrative that captivates and inspires. Your story is waiting to be told.
                                    </p>
                                    <p>Are you ready?
                                    </p>

                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>SalesSuccess <i class="fa-solid fa-hashtag"></i>Audience <i class="fa-solid fa-hashtag"></i>DigitalAsset <i class="fa-solid fa-hashtag"></i>PsychologyOfSelling <i class="fa-solid fa-hashtag"></i>Psychology <i class="fa-solid fa-hashtag"></i>CustomerEngagement <i class="fa-solid fa-hashtag"></i>Narrative <i class="fa-solid fa-hashtag"></i>Psychology <i class="fa-solid fa-hashtag"></i>Customer <i class="fa-solid fa-hashtag"></i>MarketingSuccess <i class="fa-solid fa-hashtag"></i>BusinessNetworking <i class="fa-solid fa-hashtag"></i>DigitalMarketing <i class="fa-solid fa-hashtag"></i>Nuron <i class="fa-solid fa-hashtag"></i>CustomerSatisfaction <i class="fa-solid fa-hashtag"></i>AudienceFocus <i class="fa-solid fa-hashtag"></i>CrowdManagement

                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-item category-medical" data-modal-target="#exampleModal-4">
                    <img src="{{asset('assets/img/3.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-3" tabindex="-1" aria-labelledby="exampleModalLabel-3" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#3</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/3.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Uplift your style with our authentic, preloved Chanel Flap Bag.</p>
                                    <p>This timeless piece, crafted with premium leather and iconic gold-tone hardware, proves that luxury and sustainability can go hand-in-hand. Perfect for any occasion, this bag is a true fashion statement.

                                    </p>
                                    <p>Explore our collection of preloved luxury items and make sustainable choices today!
                                    </p>

                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>luxuryspotlight <i class="fa-solid fa-hashtag"></i>stylish <i class="fa-solid fa-hashtag"></i>millionaire <i class="fa-solid fa-hashtag"></i>bags <i class="fa-solid fa-hashtag"></i>chanelclassicbag <i class="fa-solid fa-hashtag"></i>luxurylover <i class="fa-solid fa-hashtag"></i>luxurylife <i class="fa-solid fa-hashtag"></i>sustainablefashion <i class="fa-solid fa-hashtag"></i>unique <i class="fa-solid fa-hashtag"></i>BeautyForChange <i class="fa-solid fa-hashtag"></i>minimalstyle #shopping <i class="fa-solid fa-hashtag"></i>luxury_light #style
                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-item category-beauty" data-modal-target="#exampleModal-4">
                    <img src="{{asset('assets/img/4.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal-4" tabindex="-1" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#4</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/4.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Why pay the total price when you can enjoy luxury for less?</p>
                                    <p>Discover preloved designer bags, shoes, and accessories at Kayan Closet. Same quality, same style, lower price.</p>
                                    <p>Shop smart and elevate your wardrobe without breaking the bank.</p>
                                    <p>Explore our collection today!</p>

                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>luxarylifestyle <i class="fa-solid fa-hashtag"></i>EcoFriendly <i class="fa-solid fa-hashtag"></i>MindfulBeauty <i class="fa-solid fa-hashtag"></i>secondhand <i class="fa-solid fa-hashtag"></i>bestquality <i class="fa-solid fa-hashtag"></i>luxuryaddict <i class="fa-solid fa-hashtag"></i>luxury_light <i class="fa-solid fa-hashtag"></i>style <i class="fa-solid fa-hashtag"></i>onlyforluxury <i class="fa-solid fa-hashtag"></i>chanelflapbag <i class="fa-solid fa-hashtag"></i>chanelbag <i class="fa-solid fa-hashtag"></i>UniqueStyle <i class="fa-solid fa-hashtag"></i>richpaybetter
                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="project-item category-pets" data-modal-target="#exampleModal-5">
                    <img src="{{asset('assets/img/5.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-5" tabindex="-1" aria-labelledby="exampleModalLabel-5" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#5</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/5.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Did you know? Buying preloved luxury items reduces waste and promotes sustainability.</p>
                                    <p>At Kayan Closet, every purchase supports a circular fashion economy.</p>
                                    <p>Together, we can make a positive impact on the planet, one stylish choice at a time.</p>

                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>authenticitymatters <i class="fa-solid fa-hashtag"></i>luxurylighting <i class="fa-solid fa-hashtag"></i>luxury <i class="fa-solid fa-hashtag"></i>luxurybags <i class="fa-solid fa-hashtag"></i>designerbags <i class="fa-solid fa-hashtag"></i>chanelbags <i class="fa-solid fa-hashtag"></i>luxuryworld <i class="fa-solid fa-hashtag"></i>Luxuryassurance <i class="fa-solid fa-hashtag"></i>UniqueStyle <i class="fa-solid fa-hashtag"></i>richpaybetter <i class="fa-solid fa-hashtag"></i>chanelcoco <i class="fa-solid fa-hashtag"></i>shopping <i class="fa-solid fa-hashtag"></i>BudgetFriendly
                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-item category-kids" data-modal-target="#exampleModal-6">
                    <img src="{{asset('assets/img/6.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-6" tabindex="-1" aria-labelledby="exampleModalLabel-6" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#6</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/6.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Ensuring your health is our top priority!</p>
                                    <p>With TruWealth’s reliable non-emergency medical transportation services, you can count on us for safe and timely rides to your dialysis, blood work, rehabilitation, dentist, doctor appointments, and more.
                                    </p>
                                    <p>Let us handle your medical transportation needs so you can focus on what matters most—your health.</p>

                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>cleaningservices <i class="fa-solid fa-hashtag"></i>cleaningservice <i class="fa-solid fa-hashtag"></i>customerservice <i class="fa-solid fa-hashtag"></i>transportation <i class="fa-solid fa-hashtag"></i>emergency <i class="fa-solid fa-hashtag"></i>service <i class="fa-solid fa-hashtag"></i>healthymealprep <i class="fa-solid fa-hashtag"></i>laundrytime <i class="fa-solid fa-hashtag"></i>mealprepdaily <i class="fa-solid fa-hashtag"></i>socialservice <i class="fa-solid fa-hashtag"></i>emergencymedicalservices <i class="fa-solid fa-hashtag"></i>emergencyservices <i class="fa-solid fa-hashtag"></i>cleanlaundry <i class="fa-solid fa-hashtag"></i>mealprep101

                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-item category-kids" data-modal-target="#exampleModal-7">
                    <img src="{{asset('assets/img/7.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-7" tabindex="-1" aria-labelledby="exampleModalLabel-7" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#7</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/7.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Transform your home into a haven with Homes Clean service from Truwealth Home Care Agency. Our expert team ensures meticulous cleaning, leaving no corner untouched. Enjoy a spotless living space without lifting a finger. With our trusted professionals, experience the joy of coming home to a fresh, hygienic environment.</p>
                                    <p>Book your appointment today, and let us take care of your home so you can focus on what truly matters.</p>


                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>mealprep <i class="fa-solid fa-hashtag"></i>laundry #personalcare <i class="fa-solid fa-hashtag"></i>laundryday <i class="fa-solid fa-hashtag"></i>thanksgivingservice <i class="fa-solid fa-hashtag"></i>bestservice <i class="fa-solid fa-hashtag"></i>servicelearning <i class="fa-solid fa-hashtag"></i>emergencyservice <i class="fa-solid fa-hashtag"></i>mobileservice <i class="fa-solid fa-hashtag"></i>emergencymanagement <i class="fa-solid fa-hashtag"></i>socialservice <i class="fa-solid fa-hashtag"></i>emergencymedicalservices <i class="fa-solid fa-hashtag"></i>personalhomecare <i class="fa-solid fa-hashtag"></i>mobilityassistance <i class="fa-solid fa-hashtag"></i>personalizedhealthcare <i class="fa-solid fa-hashtag"></i>personalisedcare <i class="fa-solid fa-hashtag"></i>prepmeal <i class="fa-solid fa-hashtag"></i>mealpreparation

                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="project-item category-kids" data-modal-target="#exampleModal-8">
                    <img src="{{asset('assets/img/8.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-8" tabindex="-1" aria-labelledby="exampleModalLabel-8" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#8</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/8.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Feeling stressed? The solution might be right under your nose.</p>
                                    <p>Breathing exercises are a powerful yet often overlooked tool for managing stress.
                                    </p>
                                    <p>These simple techniques can transform your mental state, bringing peace to a chaotic mind and relaxation to a tense body.</p>
                                    <p>By mastering the art of mindful breathing, you'll always have a versatile stress-relief method at your disposal. It's not just about relaxation - proper breathing can enhance focus, boost energy, and improve overall wellbeing. </p>
                                    <p>Follow us for more tips, and DM to learn breathing exercises.
                                    </p>


                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>MentalStrength <i class="fa-solid fa-hashtag"></i>FamilyTherapy <i class="fa-solid fa-hashtag"></i>CulturalCompetence <i class="fa-solid fa-hashtag"></i>MentalHealthAwarenessMonth <i class="fa-solid fa-hashtag"></i>DiversityAtWork <i class="fa-solid fa-hashtag"></i>FamilyCounseling <i class="fa-solid fa-hashtag"></i>MentalHealthResources <i class="fa-solid fa-hashtag"></i>Wellbeing <i class="fa-solid fa-hashtag"></i>WorkplaceDiversity

                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="project-item category-kids" data-modal-target="#exampleModal-9">
                    <img src="{{asset('assets/img/9.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-9" tabindex="-1" aria-labelledby="exampleModalLabel-9" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#9</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/9.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Invest in your team's mental health, and reap the rewards. </p>
                                    <p>Imagine a workplace buzzing with energy, creativity, and harmony. It's possible! 🐝💡 Our mental health workshops are the secret sauce. We'll dive into the mind-body connection, equipping your team with tools to thrive. 🧰🧠 The result? Happier employees, stronger bonds, and skyrocketing productivity. It's a win-win-win! 🏆🏆🏆
                                    </p>
                                    <p>Ready to transform your workplace? DM us now to schedule a wellbeing workshop and start your journey towards a healthier, happier, and more productive team! 📩
                                    </p>


                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>CulturalDiversity <i class="fa-solid fa-hashtag"></i>MentalHealthSupport <i class="fa-solid fa-hashtag"></i>EmbracingDiversity <i class="fa-solid fa-hashtag"></i>FamilySessions <i class="fa-solid fa-hashtag"></i>MentalHealthAid <i class="fa-solid fa-hashtag"></i>WellbeingJourney <i class="fa-solid fa-hashtag"></i>WorkplaceEquality <i class="fa-solid fa-hashtag"></i>StrongMind <i class="fa-solid fa-hashtag"></i>FamilyBonding <i class="fa-solid fa-hashtag"></i>CrossCulturalCompetence <i class="fa-solid fa-hashtag"></i>MentalHealthMonth <i class="fa-solid fa-hashtag"></i>InclusiveWorkplace <i class="fa-solid fa-hashtag"></i>TherapeuticFamily


                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-item category-kids" data-modal-target="#exampleModal-10">
                    <img src="{{asset('assets/img/10.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-10" tabindex="-1" aria-labelledby="exampleModalLabel-10" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#10</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/10.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Your mental health is just as important as your physical health. Make time for yourself every day and embrace practices that nurture your mind and soul. Prioritising your wellbeing can transform your life.
                                    </p>
                                    <p>Follow us for more tips and DM for support.
                                    </p>



                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>MentalHealthMonth <i class="fa-solid fa-hashtag"></i>InclusiveWorkplace <i class="fa-solid fa-hashtag"></i>TherapeuticFamily <i class="fa-solid fa-hashtag"></i>MentalHealthHelp <i class="fa-solid fa-hashtag"></i>OverallWellbeing <i class="fa-solid fa-hashtag"></i>DiversityInWorkplace <i class="fa-solid fa-hashtag"></i>StrengthWithin <i class="fa-solid fa-hashtag"></i>FamilyWellbeing <i class="fa-solid fa-hashtag"></i>CulturalInclusion <i class="fa-solid fa-hashtag"></i>MentalHealthInitiative <i class="fa-solid fa-hashtag"></i>DiversityInclusion <i class="fa-solid fa-hashtag"></i>FamilyCounselingTips


                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-item category-kids" data-modal-target="#exampleModal-11">
                    <img src="{{asset('assets/img/11.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-11" tabindex="-1" aria-labelledby="exampleModalLabel-11" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#11</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/11.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Feeling Stressed by Dirty Trash Cans?
                                    </p>
                                    <p>Are grimy bins making your day a bit less pleasant? Don’t worry, ATL Fresh Cans has got your back! Our top-notch cleaning service guarantees your bins will be clean and odor-free, bringing you peace of mind. 🌟 Wave goodbye to the mess and welcome a cleaner, happier home with our help! 🏡💫
                                    </p>



                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>odorlessbins <i class="fa-solid fa-hashtag"></i>homecleaning <i class="fa-solid fa-hashtag"></i>stressfree <i class="fa-solid fa-hashtag"></i>cleaningservice <i class="fa-solid fa-hashtag"></i>tidyhome <i class="fa-solid fa-hashtag"></i>cleaningsolutions <i class="fa-solid fa-hashtag"></i>sanitizedbins <i class="fa-solid fa-hashtag"></i>ecofriendly <i class="fa-solid fa-hashtag"></i>binhygiene <i class="fa-solid fa-hashtag"></i>peaceofmind<i class="fa-solid fa-hashtag"></i>householdtips <i class="fa-solid fa-hashtag"></i>cleaningcompany <i class="fa-solid fa-hashtag"></i>binodor <i class="fa-solid fa-hashtag"></i>cleanliving <i class="fa-solid fa-hashtag"></i>happyhome <i class="fa-solid fa-hashtag"></i>binfresh



                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-item category-kids" data-modal-target="#exampleModal-12">
                    <img src="{{asset('assets/img/12.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-12" tabindex="-1" aria-labelledby="exampleModalLabel-12" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#12</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/12.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Trash bins seem like they thrive on the mess, but what about giving them a little TLC? 🗑️✨ Believe it or not, even trash bins have feelings and love to be clean and appreciated! With ATL Fresh Cans, we ensure your bins stay fresh, sanitised, and ready to serve. No more bad smells or dirty looks. Give your bins the love they deserve and make your home cleaner and happier. Keep them happy with ATL Fresh Cans! 🧼🌟
                                    </p>



                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>trashbins <i class="fa-solid fa-hashtag"></i>cleaning <i class="fa-solid fa-hashtag"></i>binmaintenance <i class="fa-solid fa-hashtag"></i>sanitization <i class="fa-solid fa-hashtag"></i>odorfree <i class="fa-solid fa-hashtag"></i>freshbins <i class="fa-solid fa-hashtag"></i>professionalcleaning <i class="fa-solid fa-hashtag"></i>cleanhome <i class="fa-solid fa-hashtag"></i>hygienic
                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="project-item category-kids" data-modal-target="#exampleModal-13">
                    <img src="{{asset('assets/img/13.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-13" tabindex="-1" aria-labelledby="exampleModalLabel-13" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#13</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/13.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Sure, your bins can't talk, but they sure make a statement on trash day. 🗑️✨ Make sure it's a good one with ATL Fresh Cans! Keep your bin chat positive with our spotless cleaning service that leaves them smelling fresh. 🌼 Why not book a session today? Give your bins the pampering they deserve and start contributing to a cleaner neighborhood, one bin at a time!
                                    </p>



                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>trashbincleaningservice <i class="fa-solid fa-hashtag"></i>bin <i class="fa-solid fa-hashtag"></i>trashbin <i class="fa-solid fa-hashtag"></i>bincleaning <i class="fa-solid fa-hashtag"></i>spotlessbins <i class="fa-solid fa-hashtag"></i>freshbins <i class="fa-solid fa-hashtag"></i>cleaning <i class="fa-solid fa-hashtag"></i>odorfreebins <i class="fa-solid fa-hashtag"></i>professionalcleaning <i class="fa-solid fa-hashtag"></i>helpinghands <i class="fa-solid fa-hashtag"></i>atlfreshcans

                                    </div>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="project-item category-kids" data-modal-target="#exampleModal-14">
                    <img src="{{asset('assets/img/14.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-14" tabindex="-1" aria-labelledby="exampleModalLabel-14" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#14</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/14.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Can Skin Booster Really Lighten the Skin? ✨
                                    </p>
                                    <p>Step into the Spotlight with Skin Booster Treatment: Your Gateway to Flawless Skin! 🌟 Dive deep into the wonders of Skin Booster treatments, designed to bring out your inner radiance. The secret? A masterful blend of hyaluronic acid, vitamins, antioxidants, amino acids, and minerals 💧🍊💊, meticulously formulated to diminish pigmentation, fade dark spots, and smooth out imperfections. Enriched with Vitamin C and B-complex, these boosters are powerhouses of brightness, working tirelessly to elevate your skin's radiance and clarity. 💡🌈</p>
                                    <p>But that's not all – these treatments are a hydrating hero, providing your skin with the moisture it craves 💦, enhancing both brightness and evenness. Imagine a complexion that's not just illuminated but also impeccably balanced in tone and texture. 👩‍🦰🧑🏽‍🦱 Ideal for anyone yearning for that brighter, more uniform skin tone, Skin Booster treatments are your ticket to a refreshed, glowing visage. 🎟️✨
                                    </p>

                                    <p>Ready to embrace a more radiant you? DM us today to embark on this journey to flawless, luminous skin together! 💫
                                    </p>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-item category-kids" data-modal-target="#exampleModal-15">
                    <img src="{{asset('assets/img/15.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-15" tabindex="-1" aria-labelledby="exampleModalLabel-15" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#15</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/15.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Debunking Age Myths in Skin Rejuvenation: It's Never Too Late! 🌟 When it comes to rejuvenating your skin, age is not a barrier. Our clients often wonder, 'Am I too old for skin rejuvenation treatments?' The answer is a resounding no. 🚫 Age should never be a limit to feeling confident and enjoying life.

                                    </p>
                                    <p>In a world where beauty campaigns often showcase younger faces, those in their 60s, 70s, and 80s might feel left out. But we believe in breaking this stereotype. Embracing and celebrating your age is wonderful, but if you desire to enhance your appearance, there's always a way! 🌈
                                    </p>
                                    <p>Beginning skin rejuvenation in your 40s and 50s is great for preventing and treating signs of aging early on. However, these treatments are not just for the young. They work wonders at any age, offering stunning results even later in life.

                                    </p>

                                    <p>We champion the right to look and feel fabulous at any age. Our dedicated team offers diverse, innovative, non-surgical solutions tailored to everyone's unique needs, regardless of age. 🌟 Think it's too late for skin rejuvenation? Let us show you otherwise.

                                    </p>

                                    <p>DM us today to explore how we can help you achieve the youthful, radiant skin you deserve, no matter your age! 💬✨</p>

                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="project-item category-kids" data-modal-target="#exampleModal-16">
                    <img src="{{asset('assets/img/16.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-16" tabindex="-1" aria-labelledby="exampleModalLabel-16" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#16</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/16.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>✨ Step into Radiance with Our Luxury Facials! ✨</p>
                                    <p>Indulge in a skincare experience designed to rejuvenate and enhance your natural beauty. Our facials blend expert techniques with the finest products to deeply nourish your skin, leaving you with a radiant, youthful glow that’s sure to turn heads. Why wait for gorgeous skin?

                                    </p>
                                    <p>🌟 Book your pampering session now – DM us today! 🌟
                                    </p>
                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>hydrafacialnation <i class="fa-solid fa-hashtag"></i>skintagremoval <i class="fa-solid fa-hashtag"></i>acneremoval <i class="fa-solid fa-hashtag"></i>scarremoval <i class="fa-solid fa-hashtag"></i>skincarebooster <i class="fa-solid fa-hashtag"></i>facecaretreatment <i class="fa-solid fa-hashtag"></i>boosterskin <i class="fa-solid fa-hashtag"></i>faceandbodytreatment <i class="fa-solid fa-hashtag"></i>facelifttreatment <i class="fa-solid fa-hashtag"></i>skinhydrationbooster <i class="fa-solid fa-hashtag"></i>skinwhiteningbooster <i class="fa-solid fa-hashtag"></i>stretchingexercises <i class="fa-solid fa-hashtag"></i>facialcleanser <i class="fa-solid fa-hashtag"></i>facialist <i class="fa-solid fa-hashtag"></i>facialtreatments <i class="fa-solid fa-hashtag"></i>facialcleanser <i class="fa-solid fa-hashtag"></i>facialist <i class="fa-solid fa-hashtag"></i>skinroutine <i class="fa-solid fa-hashtag"></i>healthyskin <i class="fa-solid fa-hashtag"></i>facecare


                                    </div>


                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="project-item category-kids" data-modal-target="#exampleModal-17">
                    <img src="{{asset('assets/img/17.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-17" tabindex="-1" aria-labelledby="exampleModalLabel-17" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#17</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/17.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Microneedling is used in a variety of treatments to address different skin concerns. If you are up to -</p>

                                    <ul>
                                        <li>Reducing wrinkles and fine lines</li>
                                        <li>Remove scars and tighten large pores</li>
                                        <li>Improve hyperpigmentation</li>
                                        <li>Resolve hair loss in case of alopecia</li>
                                    </ul>

                                    <p>However, microneedling is generally considered safe, but like most procedures, When done by a professional and with proper aftercare.
                                    </p>

                                    <p>At Hye Aesthetics, this game-changing treatment targets stretch marks, smoothing out your skin and enhancing its overall texture with the help of expert professionals.It has minimal downtime means you’re back to your day quickly, feeling more confident than ever.
                                    </p>

                                    <p>Excited to glow within? </p>

                                    <p>Send us a DM to schedule your consultation and embrace a more radiant you!
                                    </p>

                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>permanenthairremoval <i class="fa-solid fa-hashtag"></i>microagulhamentofacial <i class="fa-solid fa-hashtag"></i>hydrafacials <i class="fa-solid fa-hashtag"></i>strechmarks <i class="fa-solid fa-hashtag"></i>hydrafacialnation <i class="fa-solid fa-hashtag"></i>skintagremoval <i class="fa-solid fa-hashtag"></i>acneremoval <i class="fa-solid fa-hashtag"></i>scarremoval <i class="fa-solid fa-hashtag"></i>stretchmarksolution <i class="fa-solid fa-hashtag"></i>whiteheadremoval <i class="fa-solid fa-hashtag"></i>facialsteamer <i class="fa-solid fa-hashtag"></i>facialpeels <i class="fa-solid fa-hashtag"></i>ingrownhairremoval <i class="fa-solid fa-hashtag"></i>stretchmarkstreatment <i class="fa-solid fa-hashtag"></i>stretchingout <i class="fa-solid fa-hashtag"></i>facialfriday <i class="fa-solid fa-hashtag"></i>finalstretch <i class="fa-solid fa-hashtag"></i>facialtreatmentertos <i class="fa-solid fa-hashtag"></i>numifacialwipes <i class="fa-solid fa-hashtag"></i>stretchdaily <i class="fa-solid fa-hashtag"></i>stretchyourlimits <i class="fa-solid fa-hashtag"></i>stretchyourbody
                                    </div>


                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="project-item category-kids" data-modal-target="#exampleModal-18">
                    <img src="{{asset('assets/img/18.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-18" tabindex="-1" aria-labelledby="exampleModalLabel-18" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#18</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/18.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Boost your video content with our top 5 video marketing hacks:
                                    </p>

                                    <ul>
                                        <li>Know Your Audience: Understand who you're talking to.</li>
                                        <li>Tell a Story: Connect with viewers through compelling narratives.</li>
                                        <li>Add a CTA: Clearly tell viewers what to do next.</li>
                                        <li>Optimize for Search: Help people find your videos.</li>
                                        <li>Track Your Results: Learn what works and what doesn't.</li>
                                    </ul>

                                    <p>Remember that video marketing is a dynamic field, so stay updated with the latest trends and adapt your strategy accordingly. 🎥💡
                                    </p>

                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>social_media_posts <i class="fa-solid fa-hashtag"></i>social_media_post <i class="fa-solid fa-hashtag"></i>digital_marketing_company <i class="fa-solid fa-hashtag"></i>online_advertising #digital_marketing_strategy <i class="fa-solid fa-hashtag"></i>social_media_management <i class="fa-solid fa-hashtag"></i>internet_marketing <i class="fa-solid fa-hashtag"></i>instagram_marketing <i class="fa-solid fa-hashtag"></i>websitedevelopmentservice <i class="fa-solid fa-hashtag"></i>marketing_agency <i class="fa-solid fa-hashtag"></i>socialmarketing <i class="fa-solid fa-hashtag"></i>brandingagency <i class="fa-solid fa-hashtag"></i>instanews <i class="fa-solid fa-hashtag"></i>contentstrategy <i class="fa-solid fa-hashtag"></i>instagramgrowth <i class="fa-solid fa-hashtag"></i>searchengineoptimization <i class="fa-solid fa-hashtag"></i>digitalmarketer <i class="fa-solid fa-hashtag"></i>websitedesigning <i class="fa-solid fa-hashtag"></i>graphic_designer <i class="fa-solid fa-hashtag"></i>graphic_design <i class="fa-solid fa-hashtag"></i>socialgrowthmedia <i class="fa-solid fa-hashtag"></i>social_media #rebranding
                                    </div>


                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="project-item category-kids" data-modal-target="#exampleModal-19">
                    <img src="{{asset('assets/img/19.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-19" tabindex="-1" aria-labelledby="exampleModalLabel-19" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#19</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/19.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Ever feel like your content marketing isn't hitting the mark?
                                    </p>

                                    <p>Don’t make your content a one-way conversation! Engage like it’s a first date; be interesting, be curious, and most importantly, be all about them. Let’s create connections that last beyond the first click
                                    </p>

                                    <p>Want to keep your audience coming back for more?
                                    </p>

                                    <p>DM us to learn how to create content that engages, resonates, and builds lasting relationships! 🌟🔗
                                    </p>

                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>websitedesigners <i class="fa-solid fa-hashtag"></i>leadgenerationtips <i class="fa-solid fa-hashtag"></i>websitedesigncompany <i class="fa-solid fa-hashtag"></i>leadgenerationservices <i class="fa-solid fa-hashtag"></i>socialmarketing <i class="fa-solid fa-hashtag"></i>brandingagency <i class="fa-solid fa-hashtag"></i>instanews <i class="fa-solid fa-hashtag"></i>digitalconsulting <i class="fa-solid fa-hashtag"></i>marketing_digital <i class="fa-solid fa-hashtag"></i>webagency <i class="fa-solid fa-hashtag"></i>copywriter <i class="fa-solid fa-hashtag"></i>seotips <i class="fa-solid fa-hashtag"></i>graphic_designer <i class="fa-solid fa-hashtag"></i>graphic_design <i class="fa-solid fa-hashtag"></i>digital_marketing_company <i class="fa-solid fa-hashtag"></i>online_advertising <i class="fa-solid fa-hashtag"></i>digital_marketing_strategy <i class="fa-solid fa-hashtag"></i>social_media_management <i class="fa-solid fa-hashtag"></i>internet_marketing <i class="fa-solid fa-hashtag"></i>instagram_marketing
                                    </div>


                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-item category-kids" data-modal-target="#exampleModal-20">
                    <img src="{{asset('assets/img/20.png')}}" alt="project">
                    <div class="project-icons">
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-20" tabindex="-1" aria-labelledby="exampleModalLabel-20" aria-hidden="true">
                    <div class="modal-dialog modal-xlmodal-dialog modal-dialog-centered modal-xl"> <!-- Changed to fullscreen -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel" style="font-size: 2.6rem;">#20</h1>
                            </div>
                            <div class="modal-body project-modal">
                                <div class="project-img">
                                    <img src="{{asset('assets/img/20.png')}}" alt="project">
                                </div>
                                <div class="project-details">
                                    <p>Are you aware of the Power of Google Analytics! 📈

                                    </p>

                                    <p>You can -</p>

                                    <ul>
                                        <li>Track user interactions and traffic patterns 🌐</li>
                                        <li>Convert insights into sales and revenue growth 💹
                                        </li>
                                        <li>Understand your audience’s behavior for tailored experiences 👥
                                        </li>
                                        <li>Optimize your website’s design for maximum engagement 🎨
                                        </li>
                                        <li>Enhance marketing strategies for impactful results 🎯
                                        </li>
                                        <li>Make informed decisions that propel your business forward 🚀
                                        </li>
                                    </ul>

                                    <p>Empower your digital strategy with the power of analytics!
                                    </p>


                                    <div class="hashtags">
                                        <i class="fa-solid fa-hashtag"></i>seoul <i class="fa-solid fa-hashtag"></i>seo <i class="fa-solid fa-hashtag"></i>seoulfashionweek <i class="fa-solid fa-hashtag"></i>Seolhyun <i class="fa-solid fa-hashtag"></i>seotips <i class="fa-solid fa-hashtag"></i>seomarketing <i class="fa-solid fa-hashtag"></i>seoservices <i class="fa-solid fa-hashtag"></i>seoproblems <i class="fa-solid fa-hashtag"></i>seoulkorea <i class="fa-solid fa-hashtag"></i>seoexpert <i class="fa-solid fa-hashtag"></i>seoulfashion <i class="fa-solid fa-hashtag"></i>seoulsecret <i class="fa-solid fa-hashtag"></i>seojuhyun <i class="fa-solid fa-hashtag"></i>seoagency <i class="fa-solid fa-hashtag"></i>seoulfood <i class="fa-solid fa-hashtag"></i>seoconsultant <i class="fa-solid fa-hashtag"></i>seokmin <i class="fa-solid fa-hashtag"></i>seostrategy <i class="fa-solid fa-hashtag"></i>seoulcafe <i class="fa-solid fa-hashtag"></i>SEOtools <i class="fa-solid fa-hashtag"></i>seoultrip <i class="fa-solid fa-hashtag"></i>Seoraksan <i class="fa-solid fa-hashtag"></i>seobaby <i class="fa-solid fa-hashtag"></i>seocompany

                                    </div>


                                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                                        <button class="button2">
                                            Get Started
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Get all project items
    const projectItems = document.querySelectorAll('.project-item');

    projectItems.forEach((item) => {
        let openModalTimer = null; // Will hold our setTimeout reference

        // Identify the corresponding modal for this project card
        const modalId = item.getAttribute('data-modal-target'); // e.g. "#exampleModal-1"
        const targetModalEl = document.querySelector(modalId);
        if (!targetModalEl) return; // Safety check

        // The Bootstrap Modal instance we'll show/hide
        const modalInstance = new bootstrap.Modal(targetModalEl, {
            backdrop: false,  // We'll manage open/close ourselves
            keyboard: false   // No ESC key close
        });

        // 2. Show modal after 0.5s if user still hovers
        item.addEventListener('mouseenter', () => {
            openModalTimer = setTimeout(() => {
                modalInstance.show();
            }, 500); // <-- changed from 1000 to 500 ms
        });

        // 3. If user leaves the card before 0.5s, clear the timer
        item.addEventListener('mouseleave', () => {
            clearTimeout(openModalTimer);
        });

        // 4. Once the modal is open, keep it open as long as the user hovers over its content
        const modalContent = targetModalEl.querySelector('.modal-content');

        // If the user enters the modal content, do nothing
        modalContent.addEventListener('mouseenter', () => {
            // Keep modal open
        });

        // If the user leaves the modal content, hide it
        modalContent.addEventListener('mouseleave', () => {
            modalInstance.hide();
        });
    });
});
</script>


@endsection