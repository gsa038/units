import React from 'react';
import { getUnits } from '../../redux/units-reducer';
import { connect } from 'react-redux';
import Units from './Units';
import Preloader from '../common/Preloader/Preloader';
import { compose } from 'redux';
import { getUnitsState } from '../../redux/units-selectors';

class UnitsContainer extends React.Component {

    componentDidMount() {
        this.props.getUnits();
    }

    render() {
        return <>
            {this.props.isFetching ? <Preloader /> : null}
            <Units units={this.props.units} />
        </>
    }
}

let mapStateToProps = (state) => {
    return {
        units: getUnitsState(state)
    }
}

export default compose(
    connect(
        mapStateToProps, 
        { getUnits })
)
    (UnitsContainer);