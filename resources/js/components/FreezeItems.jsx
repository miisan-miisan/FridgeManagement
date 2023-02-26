import React, { useState, useEffect } from 'react';
import axios from "axios";

function FreezeItems({baseUrl, isLoading, setIsLoading}) {
    const [freezeItems, setFreezeItems] = useState([]);
    
    // 初期表示処理
    useEffect(() => {
        const homeContainer = document.getElementById('homeContainer');
        const data = JSON.parse(homeContainer.dataset.freezeItems);
        setFreezeItems(data);
    },[])

    const destroy  = async (id) => {
        const url = "/home/" + id;
        setIsLoading(true);
        await baseUrl.post( url, {_method: 'delete'}
        ).then((response) => {
            const data = response.data.items;
            setFreezeItems(data);
            setIsLoading(false);
        });
    }

    if(freezeItems.length > 0) {
        return (
            <div className="row justify-content-center">
                <div className="col-md-8">
                    {/* <div className="card" style="margin-bottom: 20px; border: white solid 2px;"> */}
                    <div className="card">
                        {/* <div className="card-header" style="background-color: rgb(255, 166, 0); display: flex; justify-content: space-between"> */}
                        <div className="card-header">
                            <div className="title font-color-w">冷蔵庫</div>
                        </div>
                            <div className="card-body  main-backcolor">
                            {freezeItems.map((freezeItem, index) => (
                                <div className="box" key={index}>
                                    <div className="leftBox">
                                        <div><p className="expiration font-color-w">
                                            {freezeItem.msg}
                                        </p></div>
                                    </div>
                                    <div className="centerBox main-headercolor">
                                        <p className="itemName font-color-w">{freezeItem.name}</p>
                                    </div>
                                    <div className="rightBox main-headercolor">
                                        <div>
                                            <button type="button" className="ate" onClick={() => destroy(freezeItem.id)} disabled={isLoading}>食べた！</button>
                                        </div>
                                        <div><button className="edit"><a href="home/edit, {$items.id}">編集</a></button></div>
                                    </div>
                                </div>
                                ))
                            }
                        </div>
                    </div>
                </div>
            </div>
        );
    } else {
        return (
            <p className='alignCenter'>冷凍庫は空です</p>
        )
    }
}

export default FreezeItems;