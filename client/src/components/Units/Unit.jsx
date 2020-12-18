import React from 'react';

let Unit = ({ unit }) => {
    return (
        <div className='s.unitItem'>
            <span>
                <div>
                    <div>{unit.name}</div>
                </div>
            </span>
            <span>
                <span>
                    <span>
                        <div>{unit.resources}</div>
                    </span>
                </span>
            </span>
        </div>
    );
}

export default Unit;