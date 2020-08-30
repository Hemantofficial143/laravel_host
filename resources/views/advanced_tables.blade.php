@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Advanced Tables
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/select2/css/select2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/datatables/css/dataTables.bootstrap4.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/dataTables.bootstrap.css')}}"/>
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/tables.css')}}"/>
    <!--End of page level styles-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-th"></i>
                        Advanced Tables
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Tables</a>
                        </li>
                        <li class="breadcrumb-item active">Advanced Tables</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <!-- editable data  table starts-->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"> </i> Scroll - horizontal and Vertical Scroll Table
                        </div>
                        <div class="card-body">
                            <div class="m-t-35">
                                <table id="example" class="table display nowrap" >
                                    <thead>
                                    <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>E-mail</th>
                                    </tr>
                                    </thead>
                                    <tbody><tr><td>Aurore</td><td>Balistreri</td><td>Principal Program Administrator</td><td>North Adeline</td><td>46</td><td>1959-8-27</td><td>$9798</td><td>Aurore74@hotmail.com</td></tr><tr><td>Mathilde</td><td>Krajcik</td><td>International Marketing Coordinator</td><td>East Brant</td><td>79</td><td>1988-4-27</td><td>$4184</td><td>Mathilde.Krajcik@gmail.com</td></tr><tr><td>Heaven</td><td>Blanda</td><td>Investor Integration Agent</td><td>South Sylvester</td><td>44</td><td>1955-2-10</td><td>$5880</td><td>Heaven.Blanda@yahoo.com</td></tr><tr><td>Madison</td><td>Hamill</td><td>Forward Creative Strategist</td><td>Kieranchester</td><td>73</td><td>1982-4-12</td><td>$2153</td><td>Madison82@hotmail.com</td></tr><tr><td>Noble</td><td>Bashirian</td><td>Customer Assurance Strategist</td><td>Borerton</td><td>58</td><td>1974-6-30</td><td>$4664</td><td>Noble52@hotmail.com</td></tr><tr><td>Lance</td><td>Toy</td><td>Internal Configuration Consultant</td><td>Boscobury</td><td>20</td><td>1959-5-5</td><td>$4819</td><td>Lance.Toy@hotmail.com</td></tr><tr><td>Keaton</td><td>Jast</td><td>Forward Functionality Supervisor</td><td>Marcland</td><td>70</td><td>1951-1-15</td><td>$5589</td><td>Keaton_Jast99@gmail.com</td></tr><tr><td>Cyrus</td><td>Wiza</td><td>Investor Identity Executive</td><td>East Anya</td><td>23</td><td>1974-2-8</td><td>$9035</td><td>Cyrus_Wiza@yahoo.com</td></tr><tr><td>Alysha</td><td>Ward</td><td>Chief Data Producer</td><td>Pfannerstillfort</td><td>27</td><td>1965-6-4</td><td>$7087</td><td>Alysha35@hotmail.com</td></tr><tr><td>Lyda</td><td>Rippin</td><td>Legacy Web Technician</td><td>North Mona</td><td>71</td><td>1977-4-7</td><td>$3310</td><td>Lyda.Rippin@yahoo.com</td></tr><tr><td>Layne</td><td>Daugherty</td><td>Forward Solutions Architect</td><td>Mariamview</td><td>78</td><td>1945-12-16</td><td>$3329</td><td>Layne.Daugherty63@yahoo.com</td></tr><tr><td>Claudie</td><td>Kuhlman</td><td>Dynamic Accounts Producer</td><td>East Lavernachester</td><td>69</td><td>1947-8-2</td><td>$6123</td><td>Claudie.Kuhlman55@hotmail.com</td></tr><tr><td>Kelley</td><td>Raynor</td><td>Legacy Solutions Producer</td><td>Goodwinview</td><td>29</td><td>1962-3-14</td><td>$9360</td><td>Kelley.Raynor@hotmail.com</td></tr><tr><td>Pierre</td><td>Anderson</td><td>Central Factors Officer</td><td>Lake Vidal</td><td>45</td><td>1980-10-28</td><td>$3000</td><td>Pierre31@hotmail.com</td></tr><tr><td>Carmella</td><td>Frami</td><td>Human Optimization Director</td><td>Denesikstad</td><td>57</td><td>1975-1-9</td><td>$3485</td><td>Carmella.Frami@hotmail.com</td></tr><tr><td>Rollin</td><td>Lehner</td><td>Human Tactics Representative</td><td>Kochfort</td><td>65</td><td>1948-12-13</td><td>$4009</td><td>Rollin_Lehner17@hotmail.com</td></tr><tr><td>Amira</td><td>Veum</td><td>Future Response Assistant</td><td>South Zack</td><td>56</td><td>1956-7-19</td><td>$8030</td><td>Amira66@yahoo.com</td></tr><tr><td>Shany</td><td>Kilback</td><td>National Marketing Representative</td><td>East Russ</td><td>35</td><td>1981-7-27</td><td>$6382</td><td>Shany_Kilback@gmail.com</td></tr><tr><td>Reva</td><td>Hudson</td><td>Product Applications Associate</td><td>Lake Montana</td><td>36</td><td>1978-3-1</td><td>$8087</td><td>Reva_Hudson12@yahoo.com</td></tr><tr><td>Henri</td><td>Kirlin</td><td>Product Research Orchestrator</td><td>Erikfurt</td><td>70</td><td>1979-7-28</td><td>$8549</td><td>Henri91@yahoo.com</td></tr><tr><td>Oren</td><td>Haley</td><td>Central Integration Facilitator</td><td>New Maraside</td><td>31</td><td>1984-10-21</td><td>$3844</td><td>Oren_Haley@gmail.com</td></tr><tr><td>Teresa</td><td>Beier</td><td>Legacy Group Representative</td><td>Wildermanland</td><td>36</td><td>1975-12-13</td><td>$7969</td><td>Teresa52@hotmail.com</td></tr><tr><td>Cynthia</td><td>Towne</td><td>Human Infrastructure Administrator</td><td>Walkerside</td><td>29</td><td>1959-11-3</td><td>$6543</td><td>Cynthia_Towne38@gmail.com</td></tr><tr><td>Thurman</td><td>Cronin</td><td>Direct Operations Technician</td><td>Jakubowskiville</td><td>72</td><td>1975-4-24</td><td>$4273</td><td>Thurman6@yahoo.com</td></tr><tr><td>Quinten</td><td>Schroeder</td><td>Dynamic Security Representative</td><td>Skilesmouth</td><td>55</td><td>1984-9-17</td><td>$6341</td><td>Quinten.Schroeder@hotmail.com</td></tr><tr><td>Crawford</td><td>Collier</td><td>Global Tactics Architect</td><td>West Bernardmouth</td><td>80</td><td>1973-11-23</td><td>$5693</td><td>Crawford_Collier@gmail.com</td></tr><tr><td>Dion</td><td>Reinger</td><td>Customer Accountability Producer</td><td>East Tristianport</td><td>68</td><td>1984-12-19</td><td>$4319</td><td>Dion.Reinger19@yahoo.com</td></tr><tr><td>Winifred</td><td>Bartoletti</td><td>District Applications Liason</td><td>Sipeschester</td><td>74</td><td>1987-12-9</td><td>$5693</td><td>Winifred95@hotmail.com</td></tr><tr><td>Newton</td><td>Monahan</td><td>Direct Group Engineer</td><td>East Tyler</td><td>39</td><td>1976-10-10</td><td>$2641</td><td>Newton_Monahan@hotmail.com</td></tr><tr><td>Jalyn</td><td>Gleason</td><td>Internal Group Facilitator</td><td>West Chyna</td><td>44</td><td>1961-5-7</td><td>$3987</td><td>Jalyn.Gleason@gmail.com</td></tr><tr><td>Fabiola</td><td>Langosh</td><td>Product Marketing Director</td><td>Mariloufurt</td><td>37</td><td>1945-6-14</td><td>$3488</td><td>Fabiola65@hotmail.com</td></tr><tr><td>Elizabeth</td><td>Torphy</td><td>Global Configuration Developer</td><td>South Vincenthaven</td><td>58</td><td>1962-10-9</td><td>$2964</td><td>Elizabeth.Torphy62@gmail.com</td></tr><tr><td>Annetta</td><td>Mohr</td><td>Chief Web Analyst</td><td>South Art</td><td>59</td><td>1943-10-6</td><td>$7946</td><td>Annetta23@yahoo.com</td></tr><tr><td>Janie</td><td>Moore</td><td>Global Mobility Strategist</td><td>Hansenfurt</td><td>44</td><td>1974-8-31</td><td>$4049</td><td>Janie.Moore@gmail.com</td></tr><tr><td>Jules</td><td>Quitzon</td><td>Corporate Interactions Designer</td><td>Rebecashire</td><td>29</td><td>1986-12-6</td><td>$6889</td><td>Jules_Quitzon@gmail.com</td></tr><tr><td>Kenyon</td><td>Stehr</td><td>International Mobility Analyst</td><td>East Olenburgh</td><td>53</td><td>1987-2-4</td><td>$9948</td><td>Kenyon_Stehr@yahoo.com</td></tr><tr><td>Peggie</td><td>Nicolas</td><td>Chief Paradigm Liason</td><td>Bodestad</td><td>41</td><td>1943-11-13</td><td>$9776</td><td>Peggie_Nicolas@hotmail.com</td></tr><tr><td>Virginie</td><td>Davis</td><td>Dynamic Communications Agent</td><td>New Nathen</td><td>66</td><td>1989-12-11</td><td>$6569</td><td>Virginie18@gmail.com</td></tr><tr><td>Anibal</td><td>Simonis</td><td>Customer Operations Architect</td><td>Celestinoside</td><td>53</td><td>1974-7-29</td><td>$8417</td><td>Anibal68@yahoo.com</td></tr><tr><td>Clotilde</td><td>Jenkins</td><td>Central Operations Administrator</td><td>West Rafaelashire</td><td>46</td><td>1987-8-25</td><td>$2608</td><td>Clotilde.Jenkins12@hotmail.com</td></tr><tr><td>Brando</td><td>Gusikowski</td><td>Internal Accountability Consultant</td><td>Gottliebville</td><td>52</td><td>1987-3-3</td><td>$9906</td><td>Brando.Gusikowski@gmail.com</td></tr><tr><td>Loyal</td><td>Powlowski</td><td>Global Markets Strategist</td><td>Lexieview</td><td>41</td><td>1986-8-16</td><td>$9772</td><td>Loyal.Powlowski@hotmail.com</td></tr><tr><td>Deondre</td><td>Romaguera</td><td>Customer Intranet Consultant</td><td>Nicolashaven</td><td>29</td><td>1973-11-8</td><td>$6074</td><td>Deondre_Romaguera80@hotmail.com</td></tr><tr><td>Sonia</td><td>Reichel</td><td>Investor Creative Specialist</td><td>North Antwan</td><td>33</td><td>1952-2-15</td><td>$7957</td><td>Sonia_Reichel@yahoo.com</td></tr><tr><td>Santiago</td><td>Wintheiser</td><td>Legacy Tactics Strategist</td><td>Nathenmouth</td><td>41</td><td>1946-11-4</td><td>$5636</td><td>Santiago_Wintheiser82@gmail.com</td></tr><tr><td>Kieran</td><td>Gerlach</td><td>Lead Data Agent</td><td>Spinkaview</td><td>50</td><td>1964-10-21</td><td>$4536</td><td>Kieran_Gerlach@yahoo.com</td></tr><tr><td>Andy</td><td>Morissette</td><td>Principal Implementation Director</td><td>Noemiview</td><td>51</td><td>1955-4-16</td><td>$6880</td><td>Andy16@hotmail.com</td></tr><tr><td>Titus</td><td>Breitenberg</td><td>Dynamic Functionality Producer</td><td>Rueckertown</td><td>79</td><td>1943-2-27</td><td>$8458</td><td>Titus.Breitenberg@gmail.com</td></tr><tr><td>Willie</td><td>Kub</td><td>Global Division Assistant</td><td>Baileystad</td><td>71</td><td>1969-9-11</td><td>$5580</td><td>Willie.Kub@hotmail.com</td></tr><tr><td>Geovanny</td><td>Reichel</td><td>Investor Research Strategist</td><td>South Jessika</td><td>70</td><td>1977-5-2</td><td>$7192</td><td>Geovanny.Reichel54@gmail.com</td></tr><tr><td>Madilyn</td><td>Daugherty</td><td>Dynamic Tactics Associate</td><td>East Rubenburgh</td><td>47</td><td>1962-6-7</td><td>$2430</td><td>Madilyn74@hotmail.com</td></tr><tr><td>Julio</td><td>Borer</td><td>Senior Paradigm Specialist</td><td>Philipborough</td><td>39</td><td>1946-3-14</td><td>$5156</td><td>Julio56@yahoo.com</td></tr><tr><td>Kaylin</td><td>Collins</td><td>Investor Tactics Developer</td><td>Corkerytown</td><td>55</td><td>1987-8-2</td><td>$5831</td><td>Kaylin81@gmail.com</td></tr><tr><td>Weston</td><td>Rohan</td><td>Future Creative Supervisor</td><td>Kianashire</td><td>27</td><td>1982-10-29</td><td>$5622</td><td>Weston.Rohan22@hotmail.com</td></tr><tr><td>Lew</td><td>Haley</td><td>Customer Mobility Analyst</td><td>Vadamouth</td><td>43</td><td>1943-6-22</td><td>$8120</td><td>Lew.Haley4@gmail.com</td></tr><tr><td>Albina</td><td>Lindgren</td><td>Investor Marketing Agent</td><td>Lake Wadeborough</td><td>73</td><td>1959-8-23</td><td>$8009</td><td>Albina.Lindgren@yahoo.com</td></tr><tr><td>Christopher</td><td>Corkery</td><td>Central Infrastructure Technician</td><td>Weimannview</td><td>57</td><td>1988-3-31</td><td>$6023</td><td>Christopher_Corkery@hotmail.com</td></tr></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"> </i> Advanced Table
                        </div>
                        <div class="card-body">
                            <div class="m-t-35">
                                <button id="del_button" class="btn btn-primary"> Delete Selected Row </button>
                                <div class="m-t-25">
                                    <table id="example_demo" class="table table-hover table-bordered " >
                                        <thead>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th class="hidden-xs">User name</th>
                                            <th class="hidden-xs">Contact</th>
                                        </tr>
                                        </thead>
                                        <tbody><tr><td>Barbara</td><td>Oberbrunner</td><td>Barbara.Oberbrunner72</td><td>340-008-0893</td></tr><tr><td>Cordelia</td><td>Rath</td><td>Cordelia_Rath61</td><td>325-249-0692</td></tr><tr><td>Enola</td><td>Strosin</td><td>Enola_Strosin50</td><td>602-588-8702</td></tr><tr><td>Wilber</td><td>Stiedemann</td><td>Wilber76</td><td>702-043-4738</td></tr><tr><td>Katrina</td><td>Connelly</td><td>Katrina90</td><td>085-905-5278</td></tr><tr><td>Carlos</td><td>Hintz</td><td>Carlos.Hintz12</td><td>702-665-5965</td></tr><tr><td>Anabel</td><td>Brekke</td><td>Anabel_Brekke</td><td>161-155-7782</td></tr><tr><td>Rocky</td><td>Rosenbaum</td><td>Rocky.Rosenbaum</td><td>886-620-3788</td></tr><tr><td>Jordi</td><td>Willms</td><td>Jordi_Willms81</td><td>906-605-0838</td></tr><tr><td>Corrine</td><td>Spinka</td><td>Corrine_Spinka65</td><td>602-085-6078</td></tr><tr><td>Ian</td><td>Gislason</td><td>Ian.Gislason</td><td>544-694-5290</td></tr><tr><td>Stephanie</td><td>Effertz</td><td>Stephanie_Effertz</td><td>566-096-4358</td></tr><tr><td>Lucious</td><td>Bosco</td><td>Lucious5</td><td>112-560-2158</td></tr><tr><td>Carmine</td><td>Halvorson</td><td>Carmine_Halvorson</td><td>488-092-0985</td></tr><tr><td>Norene</td><td>Schimmel</td><td>Norene3</td><td>362-894-5328</td></tr><tr><td>Percy</td><td>Monahan</td><td>Percy.Monahan90</td><td>908-050-3573</td></tr><tr><td>Dedric</td><td>Rempel</td><td>Dedric_Rempel</td><td>796-271-0462</td></tr><tr><td>Bella</td><td>Bosco</td><td>Bella69</td><td>267-055-6396</td></tr><tr><td>Bianka</td><td>Wyman</td><td>Bianka_Wyman</td><td>729-489-8442</td></tr><tr><td>Anna</td><td>Weber</td><td>Anna90</td><td>873-697-2642</td></tr><tr><td>Jeff</td><td>Kuvalis</td><td>Jeff_Kuvalis29</td><td>959-581-6982</td></tr><tr><td>Otha</td><td>Hilpert</td><td>Otha.Hilpert</td><td>143-819-6455</td></tr><tr><td>Toni</td><td>Weissnat</td><td>Toni.Weissnat22</td><td>664-461-1470</td></tr><tr><td>Mina</td><td>Langworth</td><td>Mina.Langworth81</td><td>633-824-6834</td></tr><tr><td>Florencio</td><td>Feeney</td><td>Florencio78</td><td>687-783-3131</td></tr><tr><td>Rita</td><td>Littel</td><td>Rita.Littel86</td><td>365-618-2849</td></tr><tr><td>Zechariah</td><td>Mitchell</td><td>Zechariah_Mitchell</td><td>893-363-0874</td></tr><tr><td>Layne</td><td>Heidenreich</td><td>Layne_Heidenreich81</td><td>202-900-7622</td></tr><tr><td>Aaron</td><td>Stokes</td><td>Aaron.Stokes</td><td>878-820-5450</td></tr><tr><td>Salvatore</td><td>Koch</td><td>Salvatore.Koch</td><td>179-711-7250</td></tr><tr><td>Virgie</td><td>Hickle</td><td>Virgie_Hickle75</td><td>882-362-1743</td></tr><tr><td>Nova</td><td>Littel</td><td>Nova.Littel</td><td>508-815-2782</td></tr><tr><td>Adolfo</td><td>Legros</td><td>Adolfo.Legros9</td><td>564-385-7353</td></tr><tr><td>Emile</td><td>Lowe</td><td>Emile_Lowe88</td><td>954-777-0692</td></tr><tr><td>Alvah</td><td>Dickens</td><td>Alvah_Dickens</td><td>778-912-8090</td></tr><tr><td>Clyde</td><td>Prosacco</td><td>Clyde.Prosacco1</td><td>491-712-5097</td></tr><tr><td>Lon</td><td>Glover</td><td>Lon32</td><td>782-816-7723</td></tr><tr><td>Drake</td><td>Heidenreich</td><td>Drake.Heidenreich78</td><td>894-429-8713</td></tr><tr><td>Mikayla</td><td>Turner</td><td>Mikayla_Turner47</td><td>389-728-0717</td></tr><tr><td>Javier</td><td>Fahey</td><td>Javier_Fahey44</td><td>129-692-7475</td></tr><tr><td>Kenya</td><td>Mosciski</td><td>Kenya.Mosciski</td><td>710-853-7377</td></tr><tr><td>Ned</td><td>Marvin</td><td>Ned75</td><td>600-091-2968</td></tr><tr><td>Rylee</td><td>Waters</td><td>Rylee75</td><td>954-415-9934</td></tr><tr><td>Angelina</td><td>Torphy</td><td>Angelina48</td><td>775-638-3448</td></tr><tr><td>Carolyn</td><td>Dach</td><td>Carolyn56</td><td>543-804-3144</td></tr><tr><td>Antonia</td><td>Hackett</td><td>Antonia.Hackett</td><td>387-732-5894</td></tr><tr><td>Nedra</td><td>Morissette</td><td>Nedra58</td><td>969-984-2709</td></tr><tr><td>Nolan</td><td>Krajcik</td><td>Nolan.Krajcik</td><td>577-227-9596</td></tr><tr><td>Jeffery</td><td>O'Hara</td><td>Jeffery_OHara</td><td>534-603-6200</td></tr><tr><td>Evangeline</td><td>Goodwin</td><td>Evangeline_Goodwin</td><td>791-355-8987</td></tr><tr><td>Dena</td><td>Medhurst</td><td>Dena.Medhurst</td><td>057-376-3245</td></tr><tr><td>Kyra</td><td>Haley</td><td>Kyra59</td><td>419-651-4827</td></tr><tr><td>Aditya</td><td>Borer</td><td>Aditya_Borer</td><td>167-962-4965</td></tr><tr><td>Kylee</td><td>Swift</td><td>Kylee37</td><td>083-414-6210</td></tr><tr><td>Elenora</td><td>Stroman</td><td>Elenora.Stroman87</td><td>140-966-9576</td></tr><tr><td>Elmo</td><td>Kassulke</td><td>Elmo.Kassulke</td><td>440-656-9499</td></tr><tr><td>Hugh</td><td>Miller</td><td>Hugh.Miller13</td><td>451-182-1112</td></tr></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i>
                            Responsive Flip Scroll Tables
                        </div>
                        <div class="card-body flip-scroll">
                            <div class="m-t-35">
                                <table class="table table-bordered table-striped flip-content">
                                    <thead class="flip-content">
                                    <tr>
                                        <th>Code</th>
                                        <th>Company</th>
                                        <th class="numeric">Price</th>
                                        <th class="numeric">Change</th>
                                        <th class="numeric">High</th>
                                        <th class="numeric">Low</th>
                                        <th class="numeric">Volume</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>AAC</td>
                                        <td>AA COM. LTD.</td>
                                        <td class="numeric">$1.38</td>
                                        <td class="numeric">-0.01</td>
                                        <td class="numeric">$1.39</td>
                                        <td class="numeric">$1.38</td>
                                        <td class="numeric">9,395</td>
                                    </tr>
                                    <tr>
                                        <td>AAD</td>
                                        <td>ARDENT GRP</td>
                                        <td class="numeric">$1.15</td>
                                        <td class="numeric">+0.02</td>
                                        <td class="numeric">$1.15</td>
                                        <td class="numeric">$1.13</td>
                                        <td class="numeric">56,431</td>
                                    </tr>
                                    <tr>
                                        <td>AAX</td>
                                        <td>AUSENCO LTD</td>
                                        <td class="numeric">$4.00</td>
                                        <td class="numeric">-0.04</td>
                                        <td class="numeric">$4.05</td>
                                        <td class="numeric">$4.00</td>
                                        <td class="numeric">90,641</td>
                                    </tr>
                                    <tr>
                                        <td>ABC</td>
                                        <td>ADELAIDE LTD</td>
                                        <td class="numeric">$3.00</td>
                                        <td class="numeric">+0.06</td>
                                        <td class="numeric">$3.00</td>
                                        <td class="numeric">$2.96</td>
                                        <td class="numeric">862,518</td>
                                    </tr>
                                    <tr>
                                        <td>ABP</td>
                                        <td>ABACUS GRP</td>
                                        <td class="numeric">$1.91</td>
                                        <td class="numeric">0.00</td>
                                        <td class="numeric">$1.93</td>
                                        <td class="numeric">$1.90</td>
                                        <td class="numeric">595,701</td>
                                    </tr>
                                    <tr>
                                        <td>ABY</td>
                                        <td>ADITYA LTD</td>
                                        <td class="numeric">$0.77</td>
                                        <td class="numeric">+0.02</td>
                                        <td class="numeric">$0.77</td>
                                        <td class="numeric">$0.76</td>
                                        <td class="numeric">54,567</td>
                                    </tr>
                                    <tr>
                                        <td>ACR</td>
                                        <td>ACRUX LTD</td>
                                        <td class="numeric">$3.71</td>
                                        <td class="numeric">+0.01</td>
                                        <td class="numeric">$3.72</td>
                                        <td class="numeric">$3.68</td>
                                        <td class="numeric">191,373</td>
                                    </tr>
                                    <tr>
                                        <td>ADU</td>
                                        <td>ADAMUS LTD</td>
                                        <td class="numeric">$0.72</td>
                                        <td class="numeric">0.00</td>
                                        <td class="numeric">$0.74</td>
                                        <td class="numeric">$0.72</td>
                                        <td class="numeric">8,602,291</td>
                                    </tr>
                                    <tr>
                                        <td>AGG</td>
                                        <td>ANG LTD</td>
                                        <td class="numeric">$7.81</td>
                                        <td class="numeric">-0.22</td>
                                        <td class="numeric">$7.82</td>
                                        <td class="numeric">$7.81</td>
                                        <td class="numeric">148</td>
                                    </tr>
                                    <tr>
                                        <td>AGK</td>
                                        <td>AGL LTD</td>
                                        <td class="numeric">$13.82</td>
                                        <td class="numeric">+0.02</td>
                                        <td class="numeric">$13.83</td>
                                        <td class="numeric">$13.67</td>
                                        <td class="numeric">846,403</td>
                                    </tr>
                                    <tr>
                                        <td>AGO</td>
                                        <td>ATLAS LTD</td>
                                        <td class="numeric">$3.17</td>
                                        <td class="numeric">-0.02</td>
                                        <td class="numeric">$3.22</td>
                                        <td class="numeric">$3.10</td>
                                        <td class="numeric">5,416,303</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of responsive tables-->
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!-- plugin scripts -->
    <script type="text/javascript" src="{{asset('vendors/select2/js/select2.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datatables/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- end plugin scripts -->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/advanced_tables.js')}}"></script>
    <!-- end of global scripts-->
@stop
