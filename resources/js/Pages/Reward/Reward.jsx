import React, { useEffect, useState } from 'react'
import Details from './Dialogs/Details';

const Reward = ({ rewards }) => {
    const [search, setSearch] = useState("")
    const [btnDetail, setBtnDetail] = useState(null)
    const query = search.toLowerCase().replace(/\s/g, "");

    var filtered = rewards.filter((reward) => reward.name.toLowerCase().replace(/\s/g, "").includes(query));

    var achieve = filtered.filter((reward) => reward.type === "achieve")
    var profile = filtered.filter((reward) => reward.type === "profile")

    var filtered_achieve = []
    achieve.forEach((val, index) => {
        var name = val.name;
        if (name !== (achieve[index + 1] && achieve[index + 1].name)) filtered_achieve.push(name)
    }
    )

    var filtered_profile = []
    profile.forEach((val, index) => {
        var name = val.name;
        if (name !== (profile[index + 1] && profile[index + 1].name)) filtered_profile.push(name)
    }
    )

    const handleBtnDetail = (name) => {
        var data = filtered.filter((reward) => reward.name === name)
        setBtnDetail(data)
    }

    const back = (data) => setBtnDetail(data)

    useEffect(() => {
        if (btnDetail) {
            var data = filtered.filter((reward) => reward.name === btnDetail[0].name)
            setBtnDetail(data)
        }
    }, [rewards])

    return (
        <main>
            <div className="mt-3 ">
                <div className=" mb-4 pt-3 border-bottom">
                    <h1 className='font-bold text-xl'>Rewards</h1>
                    <hr />
                </div>
                {btnDetail ? <Details reward={btnDetail} back={back} /> :
                    (
                        <>
                            <div className="flex justify-end mb-3 ">
                                <div className="">
                                    <input type="text" className=" drop-shadow" style={{ width: "250px" }} placeholder="Search . . . "
                                        value={search}
                                        onChange={(e) => setSearch(e.target.value)}
                                    />
                                </div>
                            </div>
                            <div className='overflow-y-scroll h-[25rem] drop-shadow rounded-lg p-3 bg-white '>
                                <div className=" mb-4 pt-3 border-bottom">
                                    <h1 className='text-lg'>Profiles</h1>
                                    <hr />
                                </div>
                                <div className="grid grid-cols-8 gap-2 mb-3">
                                    {filtered_profile.length ?
                                        filtered_profile.map((fp) => (
                                            <span
                                                className='border rounded-lg py-1 text-center cursor-pointer shadow-sm hover:bg-slate-200'
                                                key={fp}
                                                onClick={() => handleBtnDetail(fp)}
                                            >
                                                {fp.split("_").pop().split(".").shift()}
                                            </span>
                                        )) : <div>no data found</div>
                                    }
                                </div>
                                <div className=" mb-4 pt-5 border-bottom">
                                    <h1 className='text-lg'>Achievements</h1>
                                    <hr />
                                </div>
                                <div className="grid grid-cols-8 gap-2 ">
                                    {filtered_achieve.length ? filtered_achieve.map((fa) => (
                                        <span
                                            className='border rounded-lg py-1 text-center cursor-pointer shadow-sm hover:bg-slate-200'
                                            key={fa}
                                            onClick={() => handleBtnDetail(fa)}
                                        >
                                            {fa.split("_").pop().split(".").shift()}
                                        </span>
                                    )) : <div>no data found</div>
                                    }
                                </div>
                            </div>
                        </>
                    )}
            </div>
        </main>
    )
}

export default Reward
