
<div class="project-top">

    <div class="d-flex flew-row flex-wrap justify-content-between align-items-center pb-2">
        <div class="project-name-location pr-3 pt-2">
            <h4 class="mb-0"><span class="buyer_name">{{$name}}</span></h4>
        </div>
        <div class="posted-ago for-leads text-xs text-light-grey pt-2">{{$time}}</div>
    </div>

    <div class="project-title strong mb-0 lh-md">{{$profession}}</div>
    <div class="project-name-location">
        <span class="location">{{$location}}</span>
    </div>

    <div>
        <div class="d-flex align-items-center mr-4 mt-3">
            <span class="bark-svg-icon bsi-primary-primary bsi-sm mr-2 bsi-primary-dark-blue"><!--?xml version="1.0" encoding="UTF-8"?-->
                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>telephone</title>
                    <desc>Created with Sketch.</desc>
                    <g id="telephone" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Icon/telephone">
                            <g id="telephone">
                                <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M20.01,15.38 C18.78,15.38 17.59,15.18 16.48,14.82 C16.13,14.7 15.74,14.79 15.47,15.06 L13.9,17.03 C11.07,15.68 8.42,13.13 7.01,10.2 L8.96,8.54 C9.23,8.26 9.31,7.87 9.2,7.52 C8.83,6.41 8.64,5.22 8.64,3.99 C8.64,3.45 8.19,3 7.65,3 L4.19,3 C3.65,3 3,3.24 3,3.99 C3,13.28 10.73,21 20.01,21 C20.72,21 21,20.37 21,19.82 L21,16.37 C21,15.83 20.55,15.38 20.01,15.38 Z" id="Path" class="primary-color" fill-rule="nonzero"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </span>
            <span class="buyer-telephone-display">{{$telephone}}</span>
        </div>
        <div class="d-flex align-items-center mt-3">
            <span class="bark-svg-icon bsi-primary-primary bsi-sm mr-2 bsi-primary-dark-blue">
                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Icon/envelope</title>
                    <desc>Created with Sketch.</desc>
                    <g id="Icon/envelope" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g>
                            <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                            <path d="M20,4 L4,4 C2.9,4 2.01,4.9 2.01,6 L2,18 C2,19.1 2.9,20 4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 Z M20,8 L12,13 L4,8 L4,6 L12,11 L20,6 L20,8 Z" id="envelope" class="primary-color"></path>
                        </g>
                    </g>
                </svg>
            </span>
            <span class="buyer-email-display text-break">{{$email}}</span></div>
    </div>

    <div class="calls-to-action for-leads" style="">
        <button id="btn_subdetails" class="btn btn-primary large-btn button submit-your-details mt-3 mr-1" data-cy="dashboard-submit">
                <span>
                Contact <span class="buyer_name">{{$name}}</span>
                </span>
        </button>

        <button class="btn btn-link large-btn not-interested mt-3 mr-1" data-cy="dashboard-not-interested">
            <span>Not interested</span>
            <i class="fa fa-times"></i>
        </button>
    </div>
</div>

<div class="project-details pt-5" data-buyer-name="">
    <div class="project-details-label">Details</div>
    <hr class="project-details-hr">
    <div class="project-details-content">
        <div class="project-questions-answers highlights">
            <div class="project-details-question text-xs text-light-grey pb-2 text-regular">What do you need developing?</div>
            <div class="project-details-answer text-xs pb-4">A new website</div>
            <div class="project-details-question text-xs text-light-grey pb-2 text-regular">What type of website do you want developed?</div>
            <div class="project-details-answer text-xs pb-4">Small business&nbsp;</div>
            <div class="project-details-question text-xs text-light-grey pb-2 text-regular">What features do you require?</div>
            <div class="project-details-answer text-xs pb-4">Online store</div>
            <div class="project-details-question text-xs text-light-grey pb-2 text-regular">What website platform would you want to use?</div>
            <div class="project-details-answer text-xs pb-4">Strikingly </div>
            <div class="project-details-question text-xs text-light-grey pb-2 text-regular">Do you know which software technology you need?</div>
            <div class="project-details-answer text-xs pb-4">As recommended by the pro</div>
            <div class="project-details-question text-xs text-light-grey pb-2 text-regular">What is your estimated budget for this project?</div>
            <div class="project-details-answer text-xs pb-4">Less than £200</div>
            <div class="project-details-question text-xs text-light-grey pb-2 text-regular">Additional details</div>
            <div class="project-details-answer text-xs pb-4">I need help developing a website for clothing.  I will send the link to them when contacted.</div>
        </div>
    </div>
</div>
