const React = require('react');

const Application = React.createClass({
    render: function () {
        return (
            <div className="row">
                <div className="col-sm-2" />
                <div className="col-sm-8">
                    <div className="card">
                        <div className="card-block card-profile">
                            <div className="card-text">
                                <span>https://www.linkedin.com/in/</span>
                                <input name="user" />
                                <button type="submit" name="submit" className="btn btn-primary waves-effect waves-light">Open</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-sm-2" />
            </div>
        );
    }
});

module.exports = Application;
