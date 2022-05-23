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
            <h2>INTRODUCTION</h2>
            <p>This Site is provided by CNB (referred to throughout this Site as
                “cnbdubai.com“) as a service to our guests. Please review the following
                basic rules that govern your use of the cnbdubai.com site. Please note that
                your use of the cnbdubai.com site, including our mobile web site,
                constitutes your unconditional agreement to follow and be bound by
                these Terms of Use. Although you may “bookmark” a particular portion of
                this Site and thereby bypass these Terms of Use, your use of this Site still
                binds you to these Terms of Use. Cnbdubai.com reserves the right to
                update or modify these Terms of Use at any time without prior notice to
                you. For this reason, we recommend that you review these Terms of Use
                whenever you use this Site.</p>
        </div>
        <div class="termsContent">
            <h2>Use of this site</h2>
            <p>By accepting these Terms of Use through your use of the Site, you certify
                that you are 18 years of age or older. If you are under the age of 18, but at
                least 13 years of age, you may use this Site only under the supervision of
                a parent or legal guardian who agrees to be bound by these Terms of Use.
                CnbDubai.com does not knowingly collect personal information about
                children under the age of 13 without prior parental consent. Children
                under the age of 13 may not use this Site other than for browsing, and
                parents or legal guardians may not agree to these Terms of Use on their
                behalf. If you are a parent or legal guardian agreeing to these Terms of
                Use for the benefit of a child between the ages of 13 and 18, be advised
                that you are fully responsible for his or her use of this Site, including all
                financial charges and legal liability that he or she may incur.
                If you do not agree to (or cannot comply with) any of these terms and
                conditions, do not use this Site. All billing and registration information
                provided must be truthful and accurate. Providing any untruthful or
                inaccurate information constitutes a breach of these Terms of Use. By
                confirming your purchase at the end of the checkout process, you agree to
                accept and pay for the item(s) requested.
                All materials, including images, text, illustrations, designs, icons,
                photographs, programs, music clips or downloads, video clips, and
                written and other materials that are part of this Site (collectively, the
                “Contents”) are intended solely for personal, non-commercial use. You
                may download or copy the Contents and other downloadable materials
                displayed on the Site for your personal use only. No right, title or interest
                in any downloaded materials or software is transferred to you as a result
                of any such downloading or copying. You may not reproduce (except as
                noted above), publish, transmit, distribute, display, modify, create
                derivative works from, sell or participate in any sale of or exploit in any
                way, in whole or in part, any of the Contents, the Site or any related
                software. All software used on this Site is the property of CnbDubai.com
                or its suppliers and protected by U.S. and international copyright laws.
                The Contents and software on this Site may be used only as a shopping
                resource. Any other use, including the reproduction, modification,
                distribution, transmission, republication, display, or performance of the
                Contents on this Site is strictly prohibited.
                Third Party Sites: References on this Site to any names, marks, products
                or services of third parties, or hypertext links to third party sites or
                information, are provided solely as a convenience to you and do not in
                any way constitute or imply CNBDUBAI.COM endorsement, sponsorship
                or recommendation of the third party, its information, products or
                services. CNBDUBAI.COM is not responsible for the practices or policies
                of such third parties, nor the content of any third party sites, and does not
                make any representations regarding third party products or services, or
                the content or accuracy of any material on such third party sites. If you
                decide to link to any such third party sites, you do so entirely at your own
                risk.</p>
        </div>
        <div class="termsContent">
            <h2>Site Security</h2>
            <p>You are prohibited from violating or attempting to violate the security of
                the Site, including, without limitation, (a) accessing data not intended for
                such user or logging onto a server or an account which the user is not
                authorized to access; (b) attempting to probe, scan or test the
                vulnerability of a system or network or to breach security or
                authentication measures without proper authorization; (c) attempting to
                interfere with service to any user, host or network, including, without
                limitation, via means of submitting a virus to the Site, overloading,
                “flooding,” “spamming,” “mail bombing” or “crashing;” (d) sending
                unsolicited email, including promotions and/or advertising of products or
                services; or (e) forging any TCP/IP packet header or any part of the
                header information in any email or newsgroup posting. Violations of
                system or network security may result in civil or criminal liability.
                CnbDubai.com will investigate occurrences that may involve such
                violations and may involve, and cooperate with, law enforcement
                authorities in prosecuting users who are involved in such violations. You
                agree not to use any device, software or routine to interfere or attempt to
                interfere with the proper working of this Site or any activity being
                conducted on this Site. You agree, further, not to use or attempt to use
                any engine, software, tool, agent or other device or mechanism (including
                without limitation browsers, spiders, robots, avatars or intelligent
                agents) to navigate or search this Site other than the search engine and
                search agents available from CnbDubai.com on this Site and other than generally available third party
                web browsers (e.g., Netscape Navigator or Microsoft Explorer).
            </p>
        </div>
        <div class="termsContent">
            <h2>Copyright and Trademarks</h2>
            <p>Unless otherwise noted, all Contents are copyrights, trademarks, trade
                dress and/or other intellectual property owned, controlled or licensed by
                CnbDubai.com, one of its affiliates or by third parties who have licensed
                their materials to CnbDubai.com and are protected by UAE. and
                international copyright laws. The compilation (meaning the collection,
                arrangement, and assembly) of all Contents on this Site is the exclusive
                property of CnbDubai.com and is also protected by UAE. and international
                copyright laws. CnbDubai.com and its suppliers and licensors expressly
                reserve all intellectual property rights in all text, programs, products,
                processes, technology, content and other materials which appear on this
                Site. Access to this Site does not confer and shall not be considered as
                conferring upon anyone any license under any of CnbDubai.com’s or any
                third party’s intellectual property rights.<br><br>
                The CnbDubai.com names and logos and all related product and service
                names, design marks and slogans are the trademarks or service marks of
                CNB Dubai. All other marks are the property of their respective
                companies. No trademark or service mark license is granted in
                connection with the materials contained on this Site. Access to this Site
                does not authorize anyone to use any name, logo or mark in any manner.
            </p>
        </div>
        <div class="termsContent">
            <h2>User Reviews, Feedback, Submissions</h2>
            <p>For	all	reviews,	comments,	feedback,	postcards,	suggestions,	ideas,	and
                other	submissions	disclosed,	submitted	or	offered	to	CnbDubai.com on	or
                through	this	Site,	by	e-mail	or	telephone,	or	otherwise	disclosed,
                submitted	or	offered	in	connection	with	your	use	of	this	Site	(collectively,
                the	“Comments”)	you	grant	CnbDubai.com a	royalty-free,	irrevocable,
                transferable	right	and	license	to	use	the	Comments	however
                CnbDubai.com desires,	including	without	limitation,	to	copy,	modify,
                delete	in	its	entirety,	adapt,	publish,	translate,	create	derivative	works
                from	and/or	sell	and/or	distribute	such	Comments	and/or	incorporate
                such	Comments	into	any	form,	medium	or	technology	throughout	the
                world.	CnbDubai.com will	be	entitled	to	use,	reproduce,	disclose,	modify,
                adapt,	create	derivative	works	from,	publish,	display	and	distribute	any
                Comments	you	submit	for	any	purpose	whatsoever,	without	restriction
                and	without	compensating	you	in	any	way.	CnbDubai.com is	and	shall	be
                under	no	obligation	(1)	to	maintain	any	Comments	in	confidence;	(2)	to
                pay	to	user	any	compensation	for	any	Comments;	or	(3)	to	respond	to	any
                user	Comments.	You	agree	that	any	Comments	submitted	by	you	to	the
                Site	will	not	violate	the	terms	in	this	Terms	of	Use	or	any	right	of	any
                third	party,	including	without	limitation,	copyright,	trademark,	privacy	or
                other	personal	or	proprietary	right(s),	and	will	not	cause	injury	to	any
                person	or	entity.	You	further	agree	that	no	Comments	submitted	by	you
                to	the	Site	will	be	or	contain	libelous or	otherwise	unlawful,	threatening,
                abusive	or	obscene	material,	or	contain	software	viruses,	political
                campaigning,	commercial	solicitation,	chain	letters,	mass	mailings	or	any
                form	of	“spam”. <br><br>
                You	grant	CnbDubai.com the	right	to	use	the	name	that	you	submit	in
                connection	with	any	Comments.	You	agree	not	to	use	a	false	email
                address,	impersonate	any	person	or	entity,	or	otherwise	mislead	as	to	the
                origin	of	any	Comments	you	submit.	You	are	and	shall	remain	solely
                responsible	for	the	content	of	any	Comments	you	make	and	you	agree	to
                indemnify	CnbDubai.com and	its	affiliates	for	all	claims	resulting	from
                any	Comments	you	submit.	CnbDubai.com and	its	affiliates	take	no
                responsibility	and	assume	no	liability	for	any	Comments	submitted	by
                you	or	any	third	party.
            </p>
        </div>
        <div class="termsContent">
            <h2>Indemnification</h2>
            <p>You	agree	to	defend,	indemnify	and	hold	harmless	CnbDubai.com and	its
                affiliates	from	and	against	any	and	all	claims,	damages,	costs	and
                expenses,	including	attorneys’	fees,	arising	from	or	related	to	your	use	of
                the	Site	or	any	breach	by	you	of	these	Terms	of	Use.
            </p>
        </div>
        <div class="termsContent">
            <h2>Termination</h2>
            <p>
                These	Terms	of	Use	are	effective	unless	and	until	terminated	by	either
                you	or	CnbDubai.com.	You	may	terminate	these	Terms	of	Use	at	any	time,
                provided	that	you	discontinue	any	further	use	of	this	Site.	CnbDubai.com
                also	may	terminate	these	Terms	of	Use	at	any	time	and	may	do	so
                immediately	without	notice,	and	accordingly	deny	you	access	to	the	Site,
                if	in	CnbDubai.com’s	sole	discretion	you	fail	to	comply	with	any	term	or
                provision	of	these	Terms	of	Use.	Upon	any	termination	of	these	Terms	of
                Use	by	either	you	or	CnbDubai.com,	you	must	promptly	destroy	all
                materials	downloaded	or	otherwise	obtained	from	this	Site,	as	well	as	all
                copies	of	such	materials,	whether	made	under	the	Terms	of	Use	or
                otherwise.	The	following	sections	shall	survive	any	termination	of	these
                Terms	of	Use:	“Comments,”	“Site	Security,”	“Pricing	and	Content
                Information,”	“Copyrights	and	Trademarks,”	“User	Reviews,	Feedback	and
                Submissions,”	“Indemnification,”	“Termination,”	“Disclaimer,”	“Limitation
                of	Liability,”	“Privacy”	and	“General.”
            </p>
        </div>
        <div class="termsContent">
            <h2>Disclaimer</h2>
            <p>
                THIS	SITE	IS	PROVIDED	BY	CNBDUBAI.COM ON	AN	“AS	IS”	AND	“AS
                AVAILABLE”	BASIS.	CNBDUBAI.COM MAKES	NO	REPRESENTATIONS	OR
                WARRANTIES	OF	ANY	KIND,	EXPRESS	OR	IMPLIED,	AS	TO	THE
                OPERATION	OF	THE	SITE	OR	THE	INFORMATION,	CONTENT,
                MATERIALS,	OR	PRODUCTS	INCLUDED	ON	THIS	SITE.	TO	THE	FULL
                EXTENT	PERMISSIBLE	BY	APPLICABLE	LAW,	CNBDUBAI.COM DISCLAIMS
                ALL	WARRANTIES,	EXPRESS	OR	IMPLIED,	INCLUDING,	BUT	NOT	LIMITED
                TO,	IMPLIED	WARRANTIES	OF	MERCHANTABILITY	AND	FITNESS	FOR	A
                PARTICULAR	PURPOSE.	WITHOUT	LIMITING	THE	FOREGOING,
                CNBDUBAI.COM DISCLAIMS	ANY	AND	ALL	WARRANTIES,	EXPRESS	OR
                IMPLIED,	FOR	ANY	MERCHANDISE	OFFERED	ON	THIS	SITE.	YOU
                ACKNOWLEDGE,	BY	YOUR	USE	OF	THE	CNBDUBAI.COM WEB	SITE,	THAT
                YOUR	USE	OF	THE	SITE	IS	AT	YOUR	SOLE	RISK.	THIS	DISCLAIMER	DOES
                NOT	APPLY	TO	ANY	PRODUCT	WARRANTY	OFFERED	BY	THE
                MANUFACTURER	OF	THE	ITEM.	THIS	DISCLAIMER	CONSTITUTES	AN
                ESSENTIAL	PART	OF	THESE	TERMS	OF	USE.	SOME	STATES	DO	NOT
                ALLOW	LIMITATIONS	ON	HOW	LONG	AN	IMPLIED	WARRANTY	LASTS,	SO
                THE	FOREGOING	LIMITATIONS	MAY	NOT	APPLY	TO	YOU.
            </p>
        </div>
        <div class="termsContent">
            <h2>Limitation of Liability</h2>
            <p>
                UNDER	NO	CIRCUMSTANCES	AND	UNDER	NO	LEGAL	OR	EQUITABLE
                THEORY,	WHETHER	IN	TORT,	CONTRACT,	STRICT	LIABILITY	OR
                OTHERWISE,	SHALL	CNBDUBAI.COM	OR	ANY	OF	ITS	AFFILIATES,
                EMPLOYEES,	DIRECTORS,	OFFICERS,	AGENTS,	VENDORS	OR	SUPPLIERS
                BE	LIABLE	TO	YOU	OR	TO	ANY	OTHER	PERSON	FOR	ANY	INDIRECT,
                SPECIAL,	INCIDENTAL	OR	CONSEQUENTIAL	LOSSES	OR	DAMAGES	OF
                ANY	NATURE	ARISING	OUT	OF	OR	IN	CONNECTION	WITH	THE	USE	OF
                OR	INABILITY	TO	USE	THE	CNBDUBAI.COM	WEB	SITE,	INCLUDING,
                WITHOUT	LIMITATION,	DAMAGES	FOR	LOST PROFITS,	LOSS	OF
                GOODWILL,	LOSS	OF	DATA,	WORK	STOPPAGE,	ACCURACY	OF	RESULTS,
                OR	COMPUTER	FAILURE	OR	MALFUNCTION,	EVEN	IF	AN	AUTHORIZED
                REPRESENTATIVE	OF	CNBDUBAI.COM	HAS	BEEN	ADVISED	OF	OR
                SHOULD	HAVE	KNOWN	OF	THE	POSSIBILITY	OF	SUCH	DAMAGES.	IN	NO
                EVENT	WILL	CNBSUBAI.COM BE	LIABLE	FOR	ANY	DAMAGES	IN	EXCESS
                OF	THE	FEES	PAID	BY	YOU	IN	CONNECTION	WITH	YOUR	USE	OF	THE
                SITE	DURING	THE	SIX	MONTH	PERIOD	PRECEDING	THE	DATE	ON	WHICH
                THE	CLAIM	AROSE.
            </p>
        </div>
        <div class="termsContent">
            <h2>Privacy</h2>
            <p>
                You	acknowledge	that	any	personal	information	that	you	provide	through
                this	Site	will	be	used	by	CnbDubai.com in	accordance	with
                CnbDubai.com’s	Privacy	Policy.
            </p>
        </div>
        <div class="termsContent">
            <h2>General</h2>
            <p>
                These	Terms	of	Use	represent	the	complete	agreement	between	the
                parties	and	supersede	all	prior	agreements	and	representations	between
                them.	Headings	used	in	these	Terms	of	Use	are	for	reference	purposes
                only	and	in	no	way	define	or	limit	the	scope	of	the	section.	If	any
                provision	of	these	Terms	of	Use	is	held	to	be	unenforceable	for	any
                reason,	such	provision	shall	be	reformed	only	to	the	extent	necessary	to
                make	it	enforceable	and	the	other	terms	of	these	Terms	of	Use	shall
                remain	in	full	force	and	effect.	The	failure	of	CnbDubai.com to	act	with
                respect	to	a	breach	of	these	Terms	of	Use	by	you	or	others	does	not
                constitute	a	waiver	and	shall	not	limit	CnbDubai.com’s	rights	with	respect
                to	such	breach	or	any	subsequent	breaches.	These	Terms	of	Use	shall	be
                governed	by	and	construed	under	UAE law	without	regard	to	conflicts	of
                law	provisions.	Any	action	or	proceeding	arising out	of	or	related	to	these
                Terms	of	Use	or	your	use	of	this	Site	must	be	brought	in	the federal	courts
                of	UAE and	you	consent	to	the	exclusive	personal	jurisdiction	of	such
                courts.
            </p>
        </div>
        <div class="termsContent">
            <h2>Changes to the Terms of Use</h2>
            <p>
                The	Terms	of	Use	was	last	updated	on	February 20,	2021.	Please	check
                our	Terms	of	Use	periodically	for	changes.
            </p>
        </div>

    </div>
@endsection
