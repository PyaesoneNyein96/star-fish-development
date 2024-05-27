import React, { useEffect, useState } from 'react'
import "../../../css/Student.css"
import Details from './Dialogs/Details';
import { useSelector, useDispatch } from 'react-redux'
import { btnClickToDelete, btnClickToDetail, setUpdateAlert } from '@/Dashboard_Components/Slices/componentSlice';
import Delete from './Dialogs/Delete';
import { router } from '@inertiajs/react';

const Student = ({ students }) => {
    const [search, setSearch] = useState("")
    const [userTypeFilter, setUserTypeFilter] = useState("all");
    const [tierFilter, setTierFilter] = useState("all");
    const [statusFilter, setStatusFilter] = useState("all");
    const [perPage, setPerPage] = useState(10);
    const [currentPage, setCurrentPage] = useState(1);

    const { studentToDetail: clickDetail } = useSelector((state) => state.componentSlice)
    const dispatch = useDispatch();

    const query = search.toLowerCase().replace(/\s/g, "");
    var filtered = students.filter((student) => {
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
            statusFilter == "online" ? student.isAuth == 1 :
                statusFilter == "offline" ? student.isAuth == 0 :
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

    const start = (currentPage - 1) * perPage;
    const end = start + Number(perPage);
    filtered = filtered.slice(start, end);

    const totalPages = Math.ceil(students.length / perPage);

    const nextPage = () => {
        if (currentPage < totalPages) {
            setCurrentPage(currentPage + 1);
        }
    };

    const prevPage = () => {
        if (currentPage > 1) {
            setCurrentPage(currentPage - 1);

        }
    };

    const gotoPage = (page) => {
        if (page >= 1 && page <= totalPages) {
            setCurrentPage(page);
        }
    };

    const btnClickToDelete = (s) => {
        router.get(`/dashboard/student/delete/${s.id}`)
    }

    const handleLogout = (e, student) => {
        e.preventDefault();
        let ans = confirm(`Do you want to log out this user "${student.name}"?`)
        if (ans && student.isAuth == 1) {
            router.patch(`/dashboard/student/logout/${student.id}`)
            dispatch(setUpdateAlert())
        }
    }

    const renderPaginationItems = () => {
        const paginationItems = [];

        let startPage = Math.max(1, currentPage - 1);
        let endPage = Math.min(startPage + 2, totalPages);

        for (let i = startPage; i <= endPage; i++) {
            paginationItems.push(
                <li key={i}
                    className={`border px-4 py-1 bg-white  drop-shadow  ${currentPage === i ? 'bg-gray-200' : ''}`}
                    onClick={() => gotoPage(i)}
                >
                    <a className="page-link">{i}</a>
                </li>
            );
        }

        if (startPage > 1) {
            paginationItems.unshift(
                <li key="firstEllipsis" className=" disabled border px-4 py-1 bg-white  drop-shadow  ">
                    <span className="page-link">...</span>
                </li>
            );
        }
        if (endPage < totalPages) {
            paginationItems.push(
                <li key="lastEllipsis" className=" disabled border px-4 py-1 bg-white  drop-shadow  ">
                    <span className="page-link">...</span>
                </li>
            );
        }

        return paginationItems;
    };



    return (
        <main id="main" className="main " >
            <div className="mt-3 ">
                <div className=" mb-4 pt-3 border-bottom">
                    <h1 className='font-bold text-xl'>Students</h1>
                    <hr />
                </div>
                {clickDetail ? <Details student={clickDetail} /> :
                    (<>
                        <div className="flex justify-between mb-3 ">
                            <div>
                                <select
                                    className="border-0 rounded drop-shadow mb-2 "
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

                        <div className='overflow-y-scroll h-[22rem] drop-shadow rounded-lg '>
                            <table className=" border  w-full rounded-lg bg-white " >
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
                                                <td className={`border px-4 py-2 ${s.isAuth == 1 ? "text-emerald-400" : ""}`}>{s.isAuth == "1" ? "online" : "offline"}</td>
                                                <td className="border px-4 py-2 ">
                                                    <div className='flex justify-center content-center'>

                                                        <button
                                                            className={`border px-2 py-1 mx-2 text-white  rounded-md drop-shadow ${s.isAuth == "0" ? "bg-zinc-400" : "bg-zinc-600  hover:bg-zinc-700"}`}
                                                            title='Logout'
                                                            onClick={(e) => handleLogout(e, s)}
                                                            disabled={s.isAuth == "0"}
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
                        {/* pagination  */}
                        <div className=" flex justify-between mt-4">
                            <p>Showing <strong>{start + 1}</strong> to <strong>{end > students.length ? students.length : end}</strong> of <strong>{students.length}</strong> entries</p>
                            <nav >
                                <ul className="pagination flex text-gray-600 text-md cursor-pointer">
                                    <li className="page-item border px-5 py-1 rounded bg-white  drop-shadow " disabled={currentPage === 1} onClick={() => prevPage()}>
                                        <a className="page-link" href="#"><i className="fa-solid fa-angles-left"></i></a>
                                    </li>
                                    <div className='flex '>
                                        {renderPaginationItems()}
                                    </div>
                                    <li className="page-item border px-5 py-1  rounded bg-white  drop-shadow " onClick={() => nextPage()} disabled={currentPage === totalPages}>
                                        <a className="page-link" href="#"><i className="fa-solid fa-angles-right"></i></a>
                                    </li >
                                </ul >
                            </nav >
                        </div >
                    </>
                    )
                }
            </div >
        </main >
    )
}

export default Student
