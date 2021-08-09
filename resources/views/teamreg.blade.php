@include('include.headb')
<!-- section content begin -->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-3-5@m">
                <div class="uk-card uk-card-large uk-card-default in-card-paper">
                    <div class="uk-card-body">
                        <h2>Register Your Team</h2>
                        <p>
                            Provide your team information and information about your players
                        </p>
                        <hr class="uk-margin-medium-top uk-margin-small-bottom" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <ul class="in-faq-5" data-uk-accordion="collapsible: false">
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#">Team Information</a>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline uk-accordion-content">
                                        <input class="uk-input uk-border-rounded" id="name" name="name" value="" type="text" placeholder="Team Name" />
                                        <input class="uk-input uk-border-rounded" id="email" name="email" value="" type="email" placeholder="Team Email" />
                                        <input class="uk-input uk-border-rounded" id="password" name="password" value="" type="password" placeholder="Password" />
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Player 1</a>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline uk-accordion-content">
                                        <input class="uk-input uk-border-rounded" id="name" name="name1" value="" type="text" placeholder="Player Name" />
                                        <input class="uk-input uk-border-rounded" id="number" name="number1" value="" type="tel" placeholder="Player Phone Number" />
                                        <input class="uk-input uk-border-rounded" id="position" name="position1" value="" type="text" placeholder="Player Position" />
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Player 2</a>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline uk-accordion-content">
                                        <input class="uk-input uk-border-rounded" id="name" name="name2" value="" type="text" placeholder="Player Name" />
                                        <input class="uk-input uk-border-rounded" id="number" name="number2" value="" type="tel" placeholder="Player Phone Number" />
                                        <input class="uk-input uk-border-rounded" id="position" name="position2" value="" type="text" placeholder="Player Position" />
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Player 3</a>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline uk-accordion-content">
                                        <input class="uk-input uk-border-rounded" id="name" name="name3" value="" type="text" placeholder="Player Name" />
                                        <input class="uk-input uk-border-rounded" id="number" name="number3" value="" type="tel" placeholder="Player Phone Number" />
                                        <input class="uk-input uk-border-rounded" id="position" name="position3" value="" type="text" placeholder="Player Position" />
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Player 4</a>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline uk-accordion-content">
                                        <input class="uk-input uk-border-rounded" id="name" name="name4" value="" type="text" placeholder="Player Name" />
                                        <input class="uk-input uk-border-rounded" id="number" name="number4" value="" type="tel" placeholder="Player Phone Number" />
                                        <input class="uk-input uk-border-rounded" id="position" name="position4" value="" type="text" placeholder="Player Position" />
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Player 5</a>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline uk-accordion-content">
                                        <input class="uk-input uk-border-rounded" id="name" name="name5" value="" type="text" placeholder="Player Name" />
                                        <input class="uk-input uk-border-rounded" id="number" name="number5" value="" type="tel" placeholder="Player Phone Number" />
                                        <input class="uk-input uk-border-rounded" id="position" name="position5" value="" type="text" placeholder="Player Position" />
                                    </div>
                                </li>
                            </ul>
                            <input class="uk-input uk-border-rounded" id="position" name="team" value="team" type="hidden" placeholder="teamreg" />
                            <div class="uk-card uk-card-default uk-card-small uk-card-body uk-border-rounded uk-margin-medium-top">
                                <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
@include('include.footer')
