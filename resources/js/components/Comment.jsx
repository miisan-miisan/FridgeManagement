import React from 'react';

function Comment() {
    return (
        <div className="media">
            <div className="media-body comment-body">
                <div className="row">
                    <span className="comment-body-user">TestName</span>
                    <span className="comment-body-time">2020-01-06 12:16:45</span>
                </div>
                <span className="comment-body-content">
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                    lacinia congue felis in faucibus.
                </span>
            </div>
        </div>    
    );
}

export default Comment;
