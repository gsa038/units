import React from 'react';
import Unit from './Unit';

let Units = ({ units, ...props }) => {
    return <div>
        <div className='' >
            {
                units.map(unit => <Unit key={unit.name} unit={unit} />)
            }
        </div>
    </div>
}

export default Units;