@extends('.site/layouts.layout')

@section('custom_meta')
    <title>CNB Dubai | Beauty Haven | Spa & Salon</title>

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content={{Request::url()}}/>
    <meta name="twitter:title" content="CNB Dubai | Beauty Haven | Spa & Salon"/>
    <meta name="twitter:description"
          content="CNB House of Beauty. Experience the region’s most innovative and transformative beauty treatments covering every facet of your beauty needs."/>
    <meta name="twitter:image" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta name="twitter:image:alt" content="CNB Dubai | Services page image"/>

    {{-- Open Graph data --}}
    <meta property="og:url" content={{Request::url()}}/>
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="CNB Dubai | Beauty Haven | Spa & Salon"/>
    <meta property="og:description"
          content="CNB House of Beauty. Experience the region’s most innovative and transformative beauty treatments covering every facet of your beauty needs."/>
    <meta property="og:image:url" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta property="og:image:alt" content="CNB Dubai | Services page image"/>
@stop

@section('content')
    <div class="termsConditions-page">
        <div class="termsContent">
            <h2>PRIVACY POLICY</h2>
            <p>Effective Date / 2021</p>
            <h3>1. OVERVIEW</h3>
            <p>This Privacy Policy governs all websites, apps, e-newsletters, social media accounts, and
                other digital media services (“Services”) that are operated and provided by CNB (“we”, “us”
                or “our”).</p>
            <p>This Policy describes:</p>
            <ul>
                <li>How we acquire and use the Data we receive from you when you access, visit, and/or use a
                    service;
                </li>
                <li>When and why the Data may be disclosed to third parties;</li>
                <li>Your choices regarding the collection and processing of your Data</li>
            </ul>
            <p>
                <b>
                    By accessing, visiting or using any of our Services, you consent to this Privacy Policy. If
                    you do not agree with any part of this Privacy Policy or our terms of service that may
                    accompany each Service, please do not use any of the Services.
                </b>
            </p>
            <h3>2. LINKS TO THIRD PARTY SITES</h3>
            <p>Please note that this Privacy Policy does not apply to information collected through third-
                party websites, applications, destinations, or services linked to from the Service that we do
                not own or control (“Third Party Services”). A link to any Third Party Service does not mean
                that we endorse it or the quality or accuracy of information presented on the Third Party
                Service. If you decide to visit a Third Party Service, you are subject to that Third Party
                Service’s privacy policy and practices, and not this Privacy Policy. We encourage you to
                carefully review the legal and privacy notices of all Third Party Services and other digital
                services that you visit.</p>
            <h3>3. INFORMATION WE MAY COLLECT</h3>
            <p>We collect various kinds of information that you provide to us as well as information we
                obtain from your use of the Services. Some of the types of information that we may collect
                (collectively referred to herein as “Data”) include:</p>
            <p>
                <b>“Personal Information” — </b>information associated with or used to identify or contact a
                specific person. Personal Information includes: (1) contact data (such as e-mail address,
                telephone number); (2) demographic data (such as gender, date of birth and address
                including zip code); and (3) certain Usage Data (defined below), such as IP address.
            </p>
            <p>
                <b>“Usage Data” — </b>information about an individual's online activity that, by itself, does not
                identify the individual. Usage Data that may be collected include:
            </p>
            <ul>
                <li>Technical information, including your browser type, service provider, IP address,
                    operating system and webpages visited;</li>
                <li>Information about what you've searched for and looked at while using the services;</li>
                <li>Metadata, which means information related to items you made available through
                    the Services, such as the date, time or location that a shared post was posted.</li>
            </ul>
            <p>
                <b>
                    “Location Data”
                </b>
                is a category of Personal Information collected about the location of a
                mobile device or computer, including:
            </p>
            <ul>
                <li>The location of the mobile device or computer used to access the Services derived
                    from GPS or WiFi use;</li>
                <li>The IP address of the mobile device or computer or internet service used to access
                    the Services,</li>
                <li>Their information made available by a user or others that indicates the current or
                    prior location of the user, such as information that you or others post indicating your
                    location.</li>
            </ul>
            <h3>4. HOW WE COLLECT INFORMATION</h3>
            <p>We may collect Personal Information, Usage Data, and Location Data about you in the
                following ways:</p>
            <p><b>A. From You.</b> We collect information from you when you:</p>
            <ul>
                <li>
                    <b>Use the Services.</b> We collect Personal Information from you when you subscribe to our
                    publications, opt in to receive our e-newsletters, contact us for help or information,
                    complete a survey or enter our sweepstakes, give away or contests, sign up to attend one of
                    our events, or otherwise voluntarily provide your Personal Information.
                </li>
            </ul>
            <p>
                If you purchase a other product from CNB website, we will ask for Payment Information and
                other information requested for processing your payment.
            </p>
            <p>We use a third party payment processor as applicable (“Payment Processors”) to assist in
                securely processing your payment information. If you pay with a credit card the payment
                information that you provide through the Services is encrypted and transmitted directly to
                the Payment Processor. We do not store your Payment Information and do not control and
                are not responsible for the Payment Processors or their collection or use of your
                information. You may find out more about how the Payment Processors store and use your
                Payment Information by accessing the Payment Processor’s privacy policy.</p>
            <ul>
                <li><b>Connect with Social Media Through the Services.</b>The Services may offer you the ability to
                    use, share and/or connect with other social media services (collectively, “Social Media”) in
                    conjunction with certain Services. When you access the Services through your Social Media
                    account, the Services may, depending on your privacy settings, have access to information
                    that you have provided to the Social Media platform. We may use this information for the
                    purposes described in this Privacy Policy or at the time the information was collected.
                </li>
                <li>
                    <b>Sign Up to Attend Our Events.</b> When you use your Personal Information to sign up to
                    attend one of our events (including but not limited to, on the third-party sites), we may use
                    your Personal Information to notify you regarding the event. Further, we may also use your
                    Personal Information to communicate with you about and/or invite future events, our
                    Services, or Third Party Services offered by us, our event partners, or event co-
                    sponsors. Additionally, we may provide your Personal Information to the co-sponsors of the
                    event. If you do not want us to provide your Personal Information to such co-sponsors,
                    please contact the Webmaster at the contact information provided below.
                </li>
            </ul>
            <p>
                <b>B. From Our Business Partners and Service Providers.</b> Third parties that assist us with
                our business operations also collect information (including Personal Information and Usage
                Data) about you through the Services and share it with us. Please consult the privacy
                policies of these third party providers for additional details on how they use your Data in
                connection with our Services.
            </p>
            <p>
                <b>C. From Cookies and Other Data Collection Tools.</b> We, along with the service providers
                that help us provide the Services, may use small text files called “cookies”, which are small
                computer files sent to or accessed from your web browser or your computer's or tablet's
                hard drive that contain information about your computer, such as a user ID, user settings,

                browsing history and activities conducted while using the Services. Cookies are not
                themselves personally identifiable, but may be linked to Personal Information that you
                provide to us through your interaction with the Services. A cookie typically contains the
                name of the domain (internet location) from which the cookie originated, the “lifetime” of
                the cookie (i.e., when it expires) and a randomly generated unique number or similar
                identifier. We may also use other cookies and other data collection tools (such as web
                beacons and server logs), which we collectively refer to as “data collection tools,” to help
                improve your experience with the Services. For example, data collection tools help us
                remember users and make the Services more relevant to them.
            </p>
            <p>We may combine the information we collect from you with information from other sources
                and use the combined information as described in this Privacy Policy.</p>
            <h3>5. HOW WE USE YOUR INFORMATION</h3>
            <p>We may use the information we collect for any of the following purposes:</p>
            <ul>
                <li>To provide the Services to you;</li>
                <li>To analyze, operate, develop, improve and personalize the Services we offer, and to give
                    each user a more consistent and personalized experience when interacting with us;</li>
                <li>For customer service, security, to detect unlawful activities, or for archival and backup
                    purposes in connection with the provision of the Services;</li>
                <li>To communicate with users (e.g. in response to Webmaster inquiries);</li>
                <li>To provide users with advertising and direct marketing that is more relevant to you;</li>
                <li>To assess the effectiveness of and improve advertising and other marketing and
                    promotional activities on or in connection with the Services.</li>
            </ul>
            <p>
                Please note that, in order to provide you with a better experience and to improve the
                Services, information collected through the Services may be used in an aggregated or
                individualized manner.
            </p>
            <h3>6. HOW WE SHARE AND DISCLOSE YOUR INFORMATION</h3>
            <p>We do not sell your individually-identifiable personal information for compensation. We
                may share and disclose information as described at the time information is collected or as
                follows:</p>
            <ul>
                <li>
                    <b>To perform Services.</b> We may disclose Personal Information to third parties in order to
                    perform services requested or functions initiated by users, such as delivering e-newsletters
                    and publications, sending personalized event invitations, administering Promotional Events,
                    managing subscribers, and delivering marketing and solicitation offers from us, our
                    advertisers, or our affiliates. In addition, we may disclose Personal Information in order to
                    identify a user in connection with communications sent through the Services. We also may
                    offer users the opportunity to share information with friends and other users through the
                    Services.
                </li>
            </ul>
            <p>
                <b>B. With third party service providers performing services on our behalf.</b>We share
                information, including Personal Information, with our service providers to perform the
                functions for which we engage them (such as technical maintenance, hosting and data
                analyses). We may share information as needed to operate other related services
            </p>
            <p>
                <b>C. For legal purposes.</b> We also may share information that we collect from users, as
                needed, to enforce our rights, protect our property or protect the rights, property or safety
                of others, or as needed to support external auditing, compliance and corporate governance
                functions. We will disclose Personal Information as we deem necessary to respond to a
                subpoena, regulation, binding order of a data protection agency, legal process,
                governmental request or other legal or regulatory process. We may also share Personal
                Information as required to pursue available remedies or limit damages we may sustain.
            </p>
            <p>
                <b>D. In aggregated form.</b> We may share Personal Information about you in an aggregated
                form—that is, in a statistical or summary form that does not include any personal
                identifiers—with third parties in order to discover and reveal trends about how users like
                you interact with our services.
            </p>
            <p>
                <b>E. During corporate changes.</b> We may transfer information, including your Personal
                Information, in connection with a merger, sale, acquisition or other change of ownership or
                control by or of us or any affiliated company (in each case whether in whole or in part).
            </p>
            <h3>7. INFORMATION STORAGE & SECURITY</h3>
            <p>
                We retain information as long as it is necessary and relevant for our operations. We also
                retain Personal Information to comply with applicable law, prevent fraud, resolve disputes,
                troubleshoot problems, assist with any investigation, and other actions permitted by law.
                After it is no longer necessary for us to retain information, we dispose of it according to our
                data retention and deletion policies.
            </p>
            <p>
                While we aim to protect your Personal Information, the security of information transmitted
                through the internet can never be guaranteed. We are not responsible for any interception
                or interruption of any communications through the internet or for changes to or losses of
                data. In order to protect you and your data, we may suspend your use of any of the
                Services, without notice, if any breach of security is suspected. Access to and use of
                password protected and/or secure areas of any of the Services are restricted to authorized
                users only. Unauthorized access to such areas is prohibited and may lead to criminal
                prosecution.
            </p>
            <h3>8. YOUR RIGHTS - GENERAL</h3>
            <p>Our intention is to send e-mails only to viewers/customers who have chosen to receive such
                e-mails. At any time, you have the right to decline receiving future communications from
                Modern Luxury by following the “Unsubscribe” link in the CNB e-mail communications.</p>
            <p>
                You may also opt-out of having Personal Information such as your name, email address,
                postal address or phone number shared with third parties for their marketing purposes. If
                you wish to exercise this right, or if you have any other questions regarding this Policy,
                please contact our Webmaster at the mailing address or e-mail address below, or call the
                below toll-free number.
            </p>
            <p>
                Address: CNB, Villa 397, <br>
                Dubai Office: Villa 5, Street 397, J Jumeriah 2, Dubai, UAE <br>
                E-mail Address: <a href="mailto:Info@cnbspasalon.com" class="hoverLink" target="_blank" rel="noreferrer noopener">Info@cnbspasalon.com</a>
            </p>
            <p>Please include “Privacy Policy” in the subject line, and in the body, please include enough
                information for us to help you, including your full name, contact information, and the
                specific website, mobile site, application, and/or other Service you are contacting us about.
                If you submit a request specific to your personal data, we may request additional
                information to verify your identity before addressing your specific request.</p>
            <p>
                <i>Note: Only inquiries about this Policy or requests to remove Personal Information from our
                records should be sent to the Webmaster. Other communications may not be accepted or
                responded to.</i>
            </p>
            <p><b>B. Notice of Right to Opt Out of Sale of Personal Information</b></p>
            <p>You may opt out of the “sale” of their personal information. While we generally use “sale”
                regarding financial compensation, under the CCPA, “sale” is also broadly defined such that it
                may include allowing third parties to receive certain information, such as cookies, IP
                address, and/or browsing behavior, to deliver targeted advertising on the Services or other
                services. Advertising, including targeted advertising, enables us to provide you certain
                content for free and allows us to provide you offers relevant to you.</p>
            <p>If you would like to opt out of CNB’s use of your information for such purposes that are
                considered a “sale” under some country’s law, you may do so by email:
                <a class="hoverLink" target="_blank" rel="noopener noreferrer"  href="mailto:info@cnbsasalon.com">info@cnbsasalon.com</a>
            </p>
            <h3>9. CHANGES TO THIS PRIVACY STATEMENT</h3>
            <p>We may modify this Privacy Policy from time to time and adjust the “Last Modified” date at
                the beginning of this document. Your continued use of the Services after the Effective Date
                constitutes your acceptance of any amendments to the Privacy Policy, which supersedes all
                previous versions.</p>
        </div>
    </div>
@endsection
