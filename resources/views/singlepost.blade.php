@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">{{$id}}</h2>
        </div>
    </div>
    
    <div class="row content-blog">
        <div class="col-md-8">
            <div class="blog-post box padding">
                <img src="{{ asset('image/blog.jpg') }}" alt="Image" >
                    <h3><a href="blog-post.html">The Big Oxmox advised</a></h3>
                        <div class="post-detail">
                            <b>Posted:</b> January 1, 2013 &nbsp;by<a href="#"> admin </a>&nbsp;&nbsp;&nbsp;
                            <b>Tags:</b>&nbsp; <a href="#">Standard</a>
                            &nbsp;&nbsp;&nbsp;
                            <b>Comments:</b>&nbsp;<a href="#">4</a>	
                        </div>
                <div class="text-blog">
                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn't listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then.</p>
                    <p>The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn't take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again. And if she hasn't been rewritten, then they are still using her.</p>
                        <blockquote>
                            <div class="quote-content">
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy.And if she hasn't been rewritten, then they are still using her ...</p>
                            </div>	
                            <div class="quote-meta">&mdash; Quote Author</div>
                        </blockquote>
                    <p>And if she hasn't been rewritten, then they are still using her. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth:</p>
                    <ul>
                        <li><span>Et harum quidem rerum facilis</span></li>
                        <li><span>Itaque earum rerum hic</span></li>
                        <li><span>Nemo enim ipsam voluptatem</span></li>
                        <li><span>Quis autem vel eum</span></li>
                        <li><span>Nam libero tempore</span></li>
                        <li><span>Sed ut perspiciatis unde</span></li>
                        <li><span> Quis autem vel </span></li>
                        <li><span>At vero eos et</span></li>
                        <li><span>Et harum quidem</span></li>
                        <li><span>Nam libero tempore</span></li>
                        <li><span>Et harum quidem rerum facilis</span></li>
                        <li><span>Itaque earum rerum hic</span></li>
                        <li><span>Nemo enim ipsam voluptatem</span></li>
                    </ul>
                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary. </p>
                    <p>I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love which bears and sustains us, as it floats around us in an eternity of bliss; and then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.</p>
                    <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies.</p>
                </div>
            </div>
        </div>
        @include('sidebar')
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="comments  box padding">
                <h3> 4 Comments</h3>
                <div class="comments-content row">
                        <div class="avatar col-md-2">
                            <img alt="" src="{{asset('image/nicole.png') }}" width="100px">
                        </div>	
                    <div class="comments-details col-md-10">
                        <div class="comment-author">
                            <a href="#">Admin</a>	
                        </div>
                        <div class="comment-meta">December 14, 2012 at 2:45 pm -  <a class="comment-reply-link" href="#post-comment">Reply</a></div>	
                        <div class="comment-text">
                            <p>This is a test ... Etiam rhoncus maecenas tempus. </p>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="respond box padding">	   
                <h3>Leave a Comment</h3>
                <form>
                        <div class="form-group">
                        <label for="InputName">Name:<span class="required">*</span></label>
                        <div>
                            <input type="name" class="form-control" id="InputName" placeholder="Name">
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="InputEmail">Email:<span class="required">*</span></label>
                        <input type="name" class="form-control" id="InputEmail" placeholder="Email">
                        </div>

                        <div class="form-group">
                        <label for="InputSubject">Website:<span class="required">*</span></label>
                        <input type="name" class="form-control" id="InputSubject" placeholder="Subject">
                        </div>

                        <div class="form-group">
                        <label for="InputWebsite">Name:<span class="required">*</span></label>
                        <input type="name" class="form-control" id="InputWebsite" placeholder="Website">
                        </div>
                        <div class="form-group">
                        <label>Message:<span class="required">*</span></label>
                        <textarea rows="3" cols="10" class="form-control"></textarea>
                        </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="button">Post Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
    
@endsection