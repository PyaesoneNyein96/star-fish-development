import React, { useState } from 'react'
import "../../../css/Student.css"
import Details from './Dialogs/Details';
import { useSelector, useDispatch } from 'react-redux'
import { btnClickToDelete, btnClickToDetail } from '@/Dashboard_Components/Slices/componentSlice';
import Delete from './Dialogs/Delete';

const Student = ({ students }) => {
    const [search, setSearch] = useState("")
    const [userTypeFilter, setUserTypeFilter] = useState("all");
    const [tierFilter, setTierFilter] = useState("all");
    const [statusFilter, setStatusFilter] = useState("all");

    // const [clickDetail, setClickDetail] = useState(0);
    const { studentToDetail: clickDetail, toDelete: clickDelete } = useSelector((state) => state.componentSlice)
    const dispatch = useDispatch();

    const [clicklogout, setClicklogout] = useState(false);

    const query = search.toLowerCase().replace(/\s/g, "");
    const filtered = students.filter((student) => {
        let searching = student.phone == null
            ? student.name.toLowerCase().replace(/\s/g, "").includes(query) ||
            student.email.toLowerCase().replace(/\s/g, "").includes(query)
            : student.email == null
                ? student.name.toLowerCase().replace(/\s/g, "").includes(query) ||
                student.phone.toLowerCase().replace(/\s/g, "").includes(query)
                : student.name.toLowerCase().replace(/\s/g, "").includes(query) ||
                student.phone.toLowerCase().replace(/\s/g, "").includes(query) ||
                student.email.toLowerCase().replace(/\s/g, "").includes(query)

        const userTypeMatches =
            userTypeFilter == "free" ? !student.isSubscriber :
                userTypeFilter == "ss" ? student.isSubscriber :
                    true;

        const statusMatches =
            statusFilter == "online" ? student.isAuth :
                statusFilter == "offline" ? !student.isAuth :
                    true;

        const tierMatches =
            tierFilter == "silver" ? student.board.includes("silver") :
                tierFilter == "platinum" ? student.board.includes("platinum") :
                    tierFilter == "gold" ? student.board.includes("gold") :
                        tierFilter == "diamond" ? student.board.includes("diamond") :
                            true;

        return searching && userTypeMatches && statusMatches && tierMatches;
    }
    );

    return (
        <main id="main" className="main " >
            {clickDetail ? <Details student={clickDetail} /> :
                clickDelete ? <Delete student={clickDelete} /> :
                    (
                        <div className="mt-3 ">
                            <div className=" mb-4 pt-3 border-bottom">
                                <h1>Students</h1>
                                <hr />
                            </div>

                            <div className="flex justify-between mb-3">
                                <div>
                                    <select
                                        className="border-0 rounded drop-shadow mb-2"
                                        style={{ width: "190px" }}
                                        onClick={(e) => setUserTypeFilter(e.target.value)}
                                    >
                                        <option value="all">All Users</option>
                                        <option value="free">Free User</option>
                                        <option value="ss">Subscriped User</option>
                                    </select>

                                    <select
                                        className="border-0 rounded drop-shadow mb-2"
                                        style={{ width: "130px" }}
                                        onClick={(e) => setTierFilter(e.target.value)}
                                    >
                                        <option value="all">All Tiers</option>
                                        <option value="silver">Silver</option>
                                        <option value="platinum">Platinum</option>
                                        <option value="gold">Gold</option>
                                        <option value="diamond">Diamond</option>
                                    </select>

                                    <select
                                        className="border-0 rounded drop-shadow mb-2"
                                        style={{ width: "140px" }}
                                        onClick={(e) => setStatusFilter(e.target.value)}
                                    >
                                        <option value="all">All Status</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>
                                <div className="">
                                    <input type="text" className=" drop-shadow" style={{ width: "250px" }} placeholder="Search . . . " value={search}
                                        onChange={(e) => setSearch(e.target.value)}
                                    />
                                </div>
                            </div>

                            <div className='overflow-y-scroll h-[25rem] drop-shadow'>
                                <table className=" border  w-full border-separate rounded bg-white " >
                                    <thead className='table-auto w-full '>
                                        <tr className=' text-left'>
                                            <th className='border px-4 py-2'>id</th>
                                            <th className='border px-4 py-2'>Name</th>
                                            <th className='border px-4 py-2'>Email</th>
                                            <th className='border px-4 py-2'>Phone</th>
                                            <th className='border px-4 py-2'>Status</th>
                                            <th className='border px-4 py-2'></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {filtered.length ?
                                            filtered.map((s) => (
                                                <tr key={s.id}>
                                                    <td className="border px-4 py-2" >{s.id}</td>
                                                    <td className="border px-4 py-2">{s.name}</td>
                                                    <td className="border px-4 py-2">{s.email ? s.email : "-"}</td>
                                                    <td className="border px-4 py-2">{s.phone ? s.phone : "-"}</td>
                                                    <td className="border px-4 py-2">{s.isAuth == "1" ? "online" : "offline"}</td>
                                                    <td className="border px-4 py-2 ">
                                                        <div className='flex justify-center content-center'>

                                                            <button
                                                                className="border px-2 py-1 mx-2 hover:bg-zinc-700 text-white bg-zinc-600 rounded-md drop-shadow "
                                                                title='Logout'
                                                            >
                                                                <i className="fa-solid fa-right-from-bracket"></i>
                                                            </button>

                                                            {/* <button
                                                        className="border px-2 py-1 mx-2 hover:bg-zinc-600 text-white bg-zinc-500 rounded-md drop-shadow"
                                                        title='Details'
                                                        onClick={() => dispatch(btnClickToDetail(s))}
                                                    >
                                                        <i className="fa-solid fa-eye"></i>
                                                    </button> */}


                                                            <button
                                                                className="border px-2 py-1 mx-2 hover:bg-sky-700 text-white bg-sky-600 rounded-md drop-shadow "
                                                                title='Edit'
                                                                onClick={() => dispatch(btnClickToDetail(s))}
                                                            >
                                                                <i className="fa-solid fa-pen-to-square"></i>
                                                            </button>


                                                            <button
                                                                className="border px-2 py-1 mx-2 hover:bg-red-600 text-white bg-red-500 rounded-md drop-shadow"
                                                                title='Delete'
                                                                onClick={() => dispatch(btnClickToDelete(s))}
                                                            >
                                                                <i className="fa-solid fa-trash-can"></i>
                                                            </button >
                                                        </div>

                                                    </td>
                                                </tr>
                                            )) :


                                            <tr>
                                                <td colspan="6" className="w-full text-center border py-3 font-bold text-gray-500">
                                                    No results found.
                                                </td>
                                            </tr>

                                        }

                                    </tbody >
                                </table >
                            </div>

                        </div >
                    )}
        </main >
    )
}

export default Student
